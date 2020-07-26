<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
  function onDelete()
  {
      $result = DB::table('students')->where('name','=','Halim')->delete();

      if($result==true){
          return 'Success Delete Data!';
      }else{
          return "Faild Delete Data";
      }
  }
}
