<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function upload(ProfileRequest $request)
    {
            $request->file('photo')->store('profiles');
            return redirect('profile');
    }
}
