<?php

namespace Devpac\RegisterLogin\App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Devpac\RegisterLogin\App\Models\RegisterUser;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{

    public function welcome($name){
        try {
            return "Welcome".' '.$name;
        }catch (\Throwable $e){
            Log::info("Welcome: ",array($e->getMessage()));
        }
    }

    public function create($data){
        try{
            return $user = RegisterUser::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password']
                ]);
        }catch (\Throwable $e){
            Log::info("create: ",array($e->getMessage()));
        }
    }

    public function find($id){
        try{
            return $user = RegisterUser::where('id',$id)->first();
        }catch (\Throwable $e){
            Log::info("find: ",array($e->getMessage()));
        }
    }

    public function allUsers(){
        try{
            return RegisterUser::all();
        }catch (\Throwable $e){
            Log::info("All users: ",array($e->getMessage()));
        }
    }

    public function deleteUser($id){
        try{
            $userToDelete = RegisterUser::where('id',$id)->first();
            $userToDelete->delete();
            return 'Deleted user'.' '.$userToDelete->name;
        }catch (\Throwable $e){
            Log::info("Delete user: ",array($e->getMessage()));
        }
    }

    public function login($data){
        try{
            $userRegistered = RegisterUser::where('email',$data['email'])->where('password',$data['password'])->first();
            if(isset($userRegistered)){
                \Session::put('user',$userRegistered);
                return 'logged in';
            }else{
                return 'user not registred';
            }
        }catch (\Throwable $e){
            Log::info("login: ",array($e->getMessage()));
        }
    }

    public function logout(){
        try{
           return \Session::flush('user');
        }catch (\Throwable $e){
            Log::info("logout: ",array($e->getMessage()));
        }
    }


}
