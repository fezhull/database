<?php

namespace App\Http\Controllers;
use App\Models\people;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function show()
    {
        $data = people::all();
        //return people::all();
        return view('list' , ['people'=>$data]);
    }
    
}