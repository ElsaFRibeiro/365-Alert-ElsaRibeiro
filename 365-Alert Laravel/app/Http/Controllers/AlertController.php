<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Alert;
use App\Models\User;
use App\Models\Playlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{
    public function getApi()
    {
        // Create a new client
        $alerts = new Client();

        // Set the URL of the API to get the stations JSON
        $url = 'https://heichwaasser.lu/api/v1/stations';

        // Save the API request answer to a variable
        $response = $alerts->request('GET', $url);

        // Decode the JSON file into an Object
        $responseBodys = json_decode($response->getBody());

        // Looping through the Object
        foreach ($responseBodys as $response) {
            // Nested Loop to Iterate through the alert_levels array
            foreach ($response->alert_levels as $key => $level) {

                // Conditionals to save the water levels into variables and rehuse them to check
                // if the current water levels are at certain levels or normal
                if ($level->name === 'Cote d’alerte') {
                    $redAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $redAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Extreme Danger';
                        $alert->description = 'alert';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                } else if ($level->name === 'Cote de préalerte') {

                    $orangeAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $orangeAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Danger';
                        $alert->description = 'pre-alert';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                } else if ($level->name === 'Cote de vigilance') {

                    $yellowAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $yellowAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Potential Danger';
                        $alert->description = 'caution';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();

                        // If the water level is not higher then any of the alerts it's in green/good status then run this code
                    } else {

                        // Find the alert
                        $alert = Alert::find($response->id);
                        
                        // Set the Attributes
                        $alert->type = 'Low Danger';
                        $alert->description = 'awareness';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                }

                // If the water level is lower then the minimum water levels
                if ($response->current->value <= $response->minimum->value) {

                    // Find the alert
                    $alert = Alert::find($response->id);

                    // Set the Attributes
                    $alert->type = 'Dried Up River';
                    $alert->description = 'awareness';
                    $alert->trend = $response->trend;
                    $alert->water_level = $response->current->value;
                    $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                    // Save on the model instance
                    $alert->save();;
                }
            }
        }
    }

    // Function to show all the alerts at alerts page
    public function showAlerts()
    {
        $this->getApi();

        // Fetching the alerts and users
        $alerts = Alert::all();
        $users = User::all();

        // Return the view alerts along with the alerts and users collection
        return view('alerts', ['alerts' => $alerts, 'users' => $users]);
    }

    // Function to add a specific alert to the user playlist
    public function addAlert($alert_id)
    {
        // Save the logged user ID in a variable
        $user_id = Auth::user()->id;

        // Check if that alert already exists or not in the playlist and create one if not
        $playlist = Playlist::firstOrNew(
            ['user_id' => $user_id, 'alert_id' => $alert_id]
        );
        if ($playlist != null) {
            $playlist->save();
        }

        // Return to the previous page
        return back()->withInput();
    }

    // Function to show the alerts playlist at the client settings page
    public function alertPlaylist()
    {
        // Save the logged user ID in a variable
        $id = Auth::user()->id;

        // Grab all the alerts id's where the logged user ID is present
        $playlistAlerts = Playlist::all()->where('user_id', '=', $id);

        // Find the model for the specific user and save it in a variable
        $user = User::find($id);

        // Create an alerts array to be filled using a loop and sent to the view 
        $alerts = array();

        // Looping through the playlistAlerts to fill the array with all the alerts this user has on his playlist
        foreach ($playlistAlerts as $alert) {
            $alerts[] = Alert::all()->where('id', '=', $alert->alert_id);
        }

        // Return the client settings view along with the user collection and alerts array of the different alerts
        return view('client-settings', ['user' => $user, 'alerts' => $alerts]);
    }

    // Function to show the homeview along with the users playlist of alerts
    public function homePlaylist()
    {
        // Save the logged user ID in a variable
        $id = Auth::user()->id;

        // Grab all the alerts id's where the logged user ID is present
        $playlistAlerts = Playlist::all()->where('user_id', '=', $id);

        // Create an alerts array to be filled using a loop and sent to the view 
        $alerts = array();

        // Looping through the playlistAlerts to fill the array with all the alerts this user has on his playlist
        foreach ($playlistAlerts as $alert) {
            $alerts[] = Alert::all()->where('id', '=', $alert->alert_id);
        }

        // Return the home view along with the user collection and alerts array of the different alerts
        return view('home', ['alerts' => $alerts]);
    }

    // Function to edit a specific alert
    public function alert_edit_show($id)
    {   
        // Find the alert model and save it to variable
        $alert = Alert::find($id);

        // Return to the alert editing view with that specific alert information
        return view('alert-edit', ['alert' => $alert]);
    }

    // Submit the alert editing function
    public function alert_edit_submit(Request $request, $id)
    {   
        // Find the alert according to the function arguements
        $alert = Alert::find($id);

        // Changing the original model according to the request values
        $alert->water_caution_level = $request->water_caution_level;
        $alert->water_prealert_level = $request->water_prealert_level;
        $alert->water_alert_level = $request->water_alert_level;

        // Saving the model on the database
        $alert->save();

        // Return the admin view
        return redirect()->route('admin');
    }

    // Function to remove a specific alert from the user playlist
    public function removeAlert($id)
    {   
        // find the alert with the id we received in the function arguements
        Playlist::where('alert_id', $id)->delete();

        // Return the client settings view
        return redirect()->route('client-settings');
    }
}
