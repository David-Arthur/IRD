<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Bican\Roles\Models\Role;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    public function getLogin()
    {
        return view('auth/login', array("page_title" => "Login"));    
    }
    
    public function postLogin(Request $request)
    {
        $data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            );
        
        if (Auth::attempt($data))
        {
            return redirect('/');
        }
        else
        {
            $parameters = ['page_title' => 'Login', 'error' => 'Could not login, verify your email and password'];
            return view('/auth/login', $parameters);
        }
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function getRegister()
    {
        return view('auth/register', array('page_title' => 'Sign Up'));
    }
    
    public function getRegisterComplete()
    {
        return view('auth/register_complete', array('page_title' => 'Complete Registration'));
    }
    
    public function postRegister(Request $request)
    {
        $data = $request->all();
           
        $validator = $this->validator($data);
        
        if ($validator->fails())
        {
            $messages = $validator->messages();
            return redirect('auth/register')
                ->withErrors($validator);
        }
        else
        {
            $user = $this->create($data);
            // CREATE ANOTHER FORM OS VALIDATION
            if (is_array($user))
            {
                return $user["error"];
            }
            $login_data = ['email' => $data['email'],
                           'password' => $data['password']];
                           
            Auth::attempt($login_data);
            //
            return redirect('/');
        }
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $role;
        
        if (isset($data['architect']))
        {
            $role = Role::where('slug', 'architect')->first();
        }
        else
        {
            $role = Role::where('slug', 'buyers')->first();    
        }
        
        if (empty($role))
            return ["error" => "error fetching role"];
            
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]); 

        if(empty($user))
            return ["error" => "error user empty"];
        
        $user->attachRole($role);
        
        return $user;
    }
}
