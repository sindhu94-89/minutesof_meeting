<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Models\RegistrationModel;
use Auth;

class AuthController extends Controller
{
    protected $registrationModel;
    public function __construct(RegistrationModel $registrationModel){
        $this->registrationModel = $registrationModel;

    }
    public function home(){
        return view('register.login');
        /*if(Auth::user()){
            return redirect('/mom/dashboard');
        }else{
            return redirect('/register');
        }*/
    }
    public function user_register(){
        return view('register.userRegister');
    }
    public function login(){
        return view('register.login');
    }
    public function authenticateUser(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){ //checking the user's email and password.
            return redirect('/mom/dashboard');
        }
        else{
            echo "The email and password not avilable. Please register your details.";
            return view('register.login');
        }

    }
    
    public function createUser(UserFormRequest $request){
        $validated = $request->validated();
        $result = $this->registrationModel->registerUser($request->all());
        if($result['status_code']==200){
            return redirect('/mom/dashboard');
        }
        else{
            echo "The user already exits";
            return view('register.userRegister');
        }
        //return view('register.userRegister')->with(['result' => $result]);
    }
    /*public function dashboard(){
        $username = 'Welcome '.Auth::user()->name;
        return view('mom.dashboard')->with('username',$username);
    }*/
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
