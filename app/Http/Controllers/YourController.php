<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function exampleMethod($data1, $data2) {
        $hasil = $data1 + $data2;

        return $hasil;
    }
}
