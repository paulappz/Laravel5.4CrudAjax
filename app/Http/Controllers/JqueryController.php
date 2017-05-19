<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class JqueryController extends Controller
{
    public function jquery()
    {
        return view('jquery.jquery',['roles'=> Role::pluck('name','id')]);
    }
}
