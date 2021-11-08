<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\EnsureUserIsLoggedIn;


// Route to the show the login page
Route::get('/login', function () {
    return view('login');
})->name('login');


// Route to submit the login form
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');


//route register
Route::get('/register', function () {
    return view('register');
})->name('register');


//Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');


// Route to the forgotten password page
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->middleware('guest')->name('password.request');
// Route to submit the forgotten password form
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => ($status)])
        : back()->withErrors(['email' => ($status)]);
})->middleware('guest')->name('password.email');


//route to reset-password
Route::get('/reset-password/token={token}', function ($token) {
    return view('reset-password', ['token' => $token]);
})->middleware('guest')->name('password.update');


//route to reset-password
Route::post('/reset-password/token={token}', function (Request $request) {

    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', ($status))
        : back()->withErrors(['email' => [($status)]]);
})->middleware('guest')->name('password.update');


// route to the logout
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
->middleware('auth')
->name('logout');