<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ProfileView(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('profile.show',compact('user'));
    }

    public function ProfileEdit(){
        $user= User::find(auth()->user()->id);
        $id = Auth::id();
        $userId = Auth::user()->id;
        //  dd(auth()->user()->id);
        // dd($id);
        // Check for correct user
        if($userId !==$id){
            return redirect('/dashboard');
        }
        return view('profile.update-profile-information-form',compact('user'));
    }

    public function ProfileUpdate(Request $request){
         $this->validate($request,[
            'name'=>'required',
            'profile_photo_path'=>'mimes:jpeg,jpg,png',
        ]);
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        if($request->file('profile_photo_path')){
            $image_path = $data->profile_photo_path;
            if($image_path!=null){
                unlink($image_path);
            }
            $image = $request->file('profile_photo_path');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(200,200)->save('storage/profile-photos/'.$name_gen);
            $image_url = 'storage/profile-photos/'.$name_gen;
        }else{
            $image_url = $data->profile_photo_path;
        }
        $data['profile_photo_path']=$image_url;
        if($request->delete_photo == 1){
            $image_path = $data->profile_photo_path;
            unlink($image_path);
            $data['profile_photo_path']=NULL;
        }
        $data->save();
        toast('User updated!','success')->autoClose(3000)->width('450px')->timerProgressBar();
        return redirect()->back();
    }

    public function PasswordView(){
        $user= User::find(auth()->user()->id);
        $id = Auth::id();
        $userId = Auth::user()->id;
        //  dd(auth()->user()->id);
        // dd($id);
        // Check for correct user
        if($userId !==$id){
            return redirect('/dashboard');
        }
        return view('profile.update-password-form',compact('user'));
    }

    public function PasswordChange(Request $request){
        $this->validate($request,[
           'current_password' => 'required',
           'password' => 'required|confirmed',
       ]);
       $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password,$hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            // auth()->guard('web')->logout();
            toast('Password updated!','success')->autoClose(3000)->width('450px')->timerProgressBar();
            return redirect()->route('login');
        }else{
            toast('Something went wrong!','error')->autoClose(3000)->width('450px')->timerProgressBar();
            return redirect()->back();
        }
    } // End Metod
}
