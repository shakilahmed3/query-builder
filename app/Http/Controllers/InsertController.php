<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{

    function insertRow(){
        $result = DB::table('students')->insert(
            [
                ['name'=>"Sinbad", 'class'=>'BBA','roll'=>'4564'],
                ['name'=>"Md. Mahin", 'class'=>'Eight','roll'=>'5'],
                ['name'=>"Halim", 'class'=>'SSC','roll'=>'1465']
            ]


        );

        if($result==true){
            return "Insert Success";
        }else{
            return 'Insert Failed!';
        }
    }
}
