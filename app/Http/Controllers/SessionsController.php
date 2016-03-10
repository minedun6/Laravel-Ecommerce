<?php

namespace App\Http\Controllers;

use App\Mailers\AppMailer;
use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * Create a new sessions controller instance
     */
    public function __construct()
    {
      $this->middleware('guest', ['except' => ['logout', 'logout']]);
    }

    /**
     * Show the login page
     * @return \Response
     */
    public function login()
    {
        return view('auth.login');
    }
    /**
     * Perform the login.
     *
     * @param  Request  $request
     * @return \Redirect
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if ($this->signIn($request)) {
            flash('Welcome back!');
            return redirect()->intended('/dashboard');
        }
        flash('Could not sign you in.');
        return redirect()->back();
    }
    /**
     * Destroy the user's current session.
     *
     * @return \Redirect
     */
    public function logout()
    {
        Auth::logout();
        flash('You have now been signed out. See ya.');
        return redirect('login');
    }
    /**
     * Attempt to sign in the user.
     *
     * @param  Request $request
     * @return boolean
     */
    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request), $request->has('remember'));
    }
    /**
     * Get the login credentials and requirements.
     *
     * @param  Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
            'verified' => true
        ];
    }

    /**
     * Show the register page.
     *
     * @return \Response
     */
    public function register()
    {
        return view('auth.register');
    }
    /**
     * Perform the registration.
     *
     * @param  Request   $request
     * @param  AppMailer $mailer
     * @return \Redirect
     */
    public function postRegister(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = User::create($request->all());
        $mailer->sendEmailConfirmationTo($user);
        flash()->success('Registration Done ! Please confirm your email address to Activate Your Account.');
        return redirect()->back();
    }
    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->confirmEmail();
        flash('You are now confirmed. Please login.');
        return redirect('login');
    }

}
