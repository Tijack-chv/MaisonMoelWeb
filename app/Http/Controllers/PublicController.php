<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avi;

class PublicController extends Controller
{
    public function index()
    {
        return view('index', ['avis' => Avi::paginate(2)]);
    }
}
