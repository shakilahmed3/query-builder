<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{

    function leftJoinData()
    {
        $result =  DB::table('students')->leftJoin('exammarks', 'students.roll', '=', 'exammarks.roll')->get();
        return $result;
    }

    function rightJoinData()
    {
        $result =  DB::table('students')->rightJoin('exammarks', 'students.roll', '=', 'exammarks.roll')->get();
        return $result;
    }
}
