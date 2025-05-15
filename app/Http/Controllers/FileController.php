<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

        return redirect()->route('home');
    }

    public function storageLocalAppend()
    {
        Storage::append('file3.txt', Str::random(100));
        return redirect()->route('home');
    }

    public function storageLocalRead()
    {
        $content = Storage::get('file1.txt');
        echo $content;
    }

    public function storageLocalReadMulti()
    {
        $lines = Storage::get('file3.txt');
        $lines = explode(PHP_EOL, $lines);

        foreach ($lines as $line) {
            echo "<p>$line</p>";
        }
    }
}
