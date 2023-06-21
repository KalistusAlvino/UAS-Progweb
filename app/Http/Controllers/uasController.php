<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uasController extends Controller
{
    public function uas5(){
        date_default_timezone_set("Asia/Bangkok");

        $time = date('H:i:s');

        if($time >='03:00' && $time < '10:00'){
            $echo = 'Selamat Pagi';
        }
        else if($time >='10:00' && $time < '15:00'){
            $echo = 'Selamat Siang';
        }

        else if($time >='15:00' && $time < '18:00'){
            $echo = 'Selamat Sore';
        }
        else if($time >='18:00' && $time < '19:00'){
            $echo = 'Selamat Petang';
        }
        else{
            $echo = 'Selamat malam';
        }
        return view('uas5',['echo'=>$echo]);
    }
}
