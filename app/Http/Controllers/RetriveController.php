<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetriveController extends Controller
{
    function selectAllRow(){
        $result = DB::table('students')->get();
        return $result;
    }

    function selectOneRow(){
        $result = DB::table('students')->where('name','=','Md. Shakil Ahmed')->first();
        return json_encode($result);
    }

    function selectFindRow(){
        $result = DB::table('students')->find(6);
        return json_encode($result);
    }

    function selectOneColumnRow(){
        $result = DB::table('students')->pluck('name');
        return json_encode($result);
    }

    function selectMultiColumnRow(){
        $result = DB::table('students')->pluck('name','id');
        return json_encode($result);
    }

    function selectSpecificData(){
        $result = DB::table('students')->where('id','=','6')->value('name');
        return json_encode($result);
    }


}
