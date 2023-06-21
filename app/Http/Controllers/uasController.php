<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uasController extends Controller
{
    public function uas5(){
        date_default_timezone_set("Asia/Bangkok");

        $time = date('H:i:s');

        if($time >='03:00' && $time <= '09:59'){
            $echo = 'Selamat Pagi';
            return view('uas5',['echo'=>$echo]);
        }

        else if($time >='10:00' && $time <= '14:59'){
            $echo = 'Selamat Siang';
            return view('uas5',['echo'=>$echo]);
        }

        else if($time >='15:00' && $time <= '17:59'){
            $echo = 'Selamat Sore';
            return view('uas5',['echo'=>$echo]);
        }
        else if($time >='18:00' && $time <= '18:59'){
            $echo = 'Selamat Petang';
            return view('uas5',['echo'=>$echo]);
        }
        else{
            $echo = 'Selamat malam';
            return view('uas5',['echo'=>$echo]);
        }
    }
}
