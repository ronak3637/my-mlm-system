<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index(){
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.authentications.admin-login', ['pageConfigs' => $pageConfigs]);
    }
}
