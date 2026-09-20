<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function profile($name = "", $npm = "", $kelas = "")
    {
        $data = [
            'name' => $name,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        return view('profile', $data);
    }
}
// namespace App\Http\Controllers;

// public function Profile() {
//     return view('profile');
// }

// use Illuminate\Http\Request;

// class ProfileController extends Controller
// {
//     //
// }
