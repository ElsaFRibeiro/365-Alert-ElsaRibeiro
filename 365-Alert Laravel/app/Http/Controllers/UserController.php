<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alert;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Function to return all viewers to the admin page and put them in a table
    public function adminUsersList()
    {
        // Fetch all the User and Alert models on the database
        $users = User::all();
        $alerts = Alert::all();

        // Return the admin view with the users and alerts collections
        return view('admin', ['users' => $users, 'alerts' => $alerts]);
    }

    // Function to return the Admin view to edit the User
    public function adminUserEdit($id)
    {   
        // Find the specific user as received in the function argument
        $user = User::find($id);

        // Return the admin user edit view
        return view('admin-user-edit', ['user' => $user]);
    }

    // Function for the admin to update the user editing 
    public function adminUserUpdate(Request $request, $id)
    {
        // Look for the specific User ID
        $user = User::find($id);

        // Set the Attributes
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->contact = $request->contact;

        // Save on the model instance
        $user->save();
        
        // Return the admin view
        return redirect()->route('admin');
    }

    // Function to delete an user as an Admin
    public function adminUserDelete($id)
    {
        // Delete the user with the ID specified in the function argument
        User::destroy($id);

        // Return the admin view
        return redirect()->route('admin');
    }

    // Function to edit the client settings
    public function editClientSettingsShow()
    {
        // Look for the specific User ID
        $id = Auth::user()->id;

        // Use that ID to find the corresponding model in the database
        $user = User::find($id);

        // Return the client settings editing view with that specific user collection
        return view('client-settings-edit', ['user' => $user]);
    }

    // Function to submit the client settings editing
    public function editClientSettingSubmit(Request $request, $id)
    {   
        // Look for the model in the database with the ID received in the function arguments
        $user = User::find($id);

        // Set the attributes for that model
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->contact = $request->contact;

        // Save the model on the database
        $user->save();

        // Return the client settings view
        return redirect()->route('client-settings');
    }
    public function deleteAccount()
    {
        $id = Auth::user()->id;

        User::destroy($id);

        return redirect()->route('home1');
    }

    public function unsubscribe()
    {
        $id = Auth::user()->id;

        $playlist = Playlist::where('user_id', '=', $id)->delete();

        return redirect()->route('client-settings');
    }
}
