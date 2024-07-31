<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Hash;
use Auth;

class RegistrationModel extends Model
{
    use HasFactory;
    public function registerUser($request){
        $checkUser = User::where('email',$request['email'])->first(); //Select query
        if($checkUser){
            return ['status_code' => 400, 'message' => 'User already exits'];
        }
        else{
            $data = ['name' => $request['first_name'].' '.$request['last_name'],
                'gender' => $request['gender'], 'email' => $request['email'], 'phone_number' => $request['phone_number'], 'dob' => $request['dob'], 'password' => Hash::make($request['password']), 'address' => $request['address']
            ];
            $user = User::create($data);
            Auth::login($user);
            return ['status_code' => 200, 'message' => 'User created'];
        }
        
    }
}
