<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    public function index()
    {
        return 'test berhasil';
    }

    public function urutan($ke)
    {
        return view('urutan', ['ke' => $ke]);
    }
}
