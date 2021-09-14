<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }

    public function about(){
        echo 'NIM  : 2031710138 <br>';
        echo 'Nama : Hafiz Raka Pradana';
    }

    public function article ($id = 1){
        echo 'Halaman artikel dengan id '.$id;
    }
}
