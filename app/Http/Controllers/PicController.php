<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PicController extends Controller
{
    //擦看图片
   public function getLan(){
    
    return view('/pic/lan');

   }
   //修改顺序和图片
   public function getGai(){
 
    return view('/pic/gai');
   }
}
