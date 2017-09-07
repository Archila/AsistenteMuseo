<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class QRController extends Controller
{
   public function generador(){
        return view("CodigoQR/QR");
   }
}