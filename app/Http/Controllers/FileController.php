<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function storageLocalCreate()
    {
        Storage::put('file1.txt', 'Conteúdo do ficheiro 1');
        Storage::disk('local')->put('file2.txt', 'Conteúdo do ficheiro 2');

        echo 'Fim';
    }
}
