<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Public;
use Cloudder;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ProfileController extends Controller
{
    public function show()
    {
        $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        return view('pages.auth.profileView', compact('profile'));
        
    }
    public function edit()
    {   $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        return view('pages.auth.profile', compact('profile'));
    }
    public function update(Request $request)
    {


        
        $idp=DB::table('profiles')->where('user_id',auth()->user()->id)->value('id');
        $profile=Profile::findOrFail($idp);
        $profile->name=$request->input('name');
        $profile->address=$request->input('address');
        $profile->movil=$request->input('movil');
        $profile->last_name=$request->input('last_name');
        $id=$profile->id;
        $direction='StarRestaurants/users/user_'.$id;
        if(isset($request['avatar'])){
            $image = $request->file('avatar');
            $obj = Cloudinary::upload($image->getRealPath(),['folder'=>$direction]);
            $url = $obj -> getSecurePath();
            $imagenID = $obj -> getPublicID();
            if(isset($profile-> image->public_id))
            {
                Cloudinary::destroy($profile-> image->public_id);
                $profile->image()->update(['url'=>$url,'public_id'=>$imagenID]);
            }else{
                $profile->image()->create(['url'=>$url,'public_id'=>$imagenID]);
            }


        }

        $user=User::findOrFail(auth()->user()->id);
        $user->email=$request->input('email');
        $user->name=$request->input('name');
        $user->birthday=$request->input('birthday');

        $profile->save();
        $user->save();
        return to_route('profile');
    }
}
