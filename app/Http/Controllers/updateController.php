<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    function onUpdate(){
        $result = DB::table('students')->where('name','=','Sinbad')->update(['name'=>"Abdul Hamid",'class'=>'BBA']);

        if($result==true){
            return "Update Successfull";
        }else{
            return "Update Failed";
        }

    }
}
