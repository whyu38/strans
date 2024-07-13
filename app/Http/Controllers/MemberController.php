<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class MemberController extends Controller
{
    public function index()
    {
        return view('member.index');
    }

}