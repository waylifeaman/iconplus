<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Data;
use App\Models\Jurusan;
use App\Models\karya;

class postControll extends Controller
{
    public function dashboard()
    {
        return view('home', [
            "title" => "Home",
            // "body" => Data::all()
        ]);
    }
}
