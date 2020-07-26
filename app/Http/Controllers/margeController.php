<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class margeController extends Controller
{

    function mergeData(){
        $students = DB::table('students')->get();
        $examMarks = DB::table('exammarks')->get();

        $totalData = $students -> merge($examMarks);
        return $totalData;

    }
}
