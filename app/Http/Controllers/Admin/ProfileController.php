<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfilePasswordUpdateRequest;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()  : View{
        return view('admin.profile.index');
    }

    function updateProfile( ProfileUpdateRequest $request) :RedirectResponse
    {
        dd($request->all());
       $user = Auth::user();
       $user->name= $request->name;
       $user->email = $request->email;

       $user->save();
       toastr('updated Successfully' ,'success');
       
        
        return redirect()->back();
    }
function updatePassword(ProfilePasswordUpdateRequest  $request) :RedirectResponse{
$user = Auth::user();
$user->password = bcrypt($request->password);
$user->save();

toastr()->success('Password Updated successfully');
return redirect()->back();
}
}
