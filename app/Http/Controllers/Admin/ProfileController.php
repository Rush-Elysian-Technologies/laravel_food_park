<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()  : View{
        return view('admin.profile.index');
    }

    function updateProfile() :RedirectResponse
    {
        return redirect()->back();
    }
}
