<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IndexController extends Controller
{
    public function view() {
        $word = "Flemming";
        $encrypted_word = Crypt::encryptString($word);

        return view('index', compact('encrypted_word'));
    }
}
