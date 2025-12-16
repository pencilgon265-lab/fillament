<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class LandingController extends Controller
{
   //
   public function index()
   {
       $barangs = Barang::all();
       return view('welcome', compact('barangs'));
   }
}
