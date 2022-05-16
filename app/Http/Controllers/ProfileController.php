<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
  public function index()
  {
    return view('profile.index');
  }

  public function confirm(ProfileRequest $request)
  {
    $username = $request->input('username');
    $password = $request->input('password');
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');
    return view('profile.confirm',['username' => $username, 'password' => $password, 'latitude' => $latitude, 'longitude' => $longitude]);
  }

}
