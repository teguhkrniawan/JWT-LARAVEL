<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class BpsController extends Controller
{

    // public function __construct()
    // {
    //     $this->user = JWTAuth::parseToken()->authenticate();
    // }

    // function tampil data
    // public function all_data(){
    //     return ResponseFormatter::success([
    //         ['hehe' => 'haha']
    //     ], 'test sukses');
    // }

    public function all_data(){
        return ResponseFormatter::success([
            
        ], "Sukses");
    }
}
