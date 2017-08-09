<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|max:255|regex:/^[[:alpha:](\.)?][ [:alpha:](\.)?]+$/',
            'contact_number' => 'required|size:11|unique:users|regex:/^01[156789]{1}[0-9]{8}$/',
            'email_address' => 'required|email_address|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'national_id_number' => 'required|size:17|unique:users|regex:/^19[4-9][0-9]{14}$/',
            'date_of_birth' => 'required|date|regex:/^' . substr($data['national_id_number'], 0, 4) . '/',
            'occupation' => 'required|in:Government Service,Private Service,Student,Doctor,Engineer,Teacher,Politician,Lawyer,Law and Order, 
                                        Businessman,Journalist,Banker,Housewife,Unemployed,Worker,Farmer,Others',
            'designation' => 'string',
            'contact_address' => 'string'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'contact_number' => $data['contact_number'],
            'email_address' => $data['email_address'],
            'password' => bcrypt($data['password']),
            'national_id_number' => $data['national_id_number'],
            'date_of_birth' => $data['date_of_birth'],
            'occupation' => $data['occupation'],
            'designation' => $data['designation'],
            'contact_address' => $data['contact_address'],
            'user_type' => "reporter",
        ]);

    }
}
