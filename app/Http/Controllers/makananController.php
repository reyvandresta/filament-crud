<?php

namespace App\Http\Controllers;

use App\Models\Makanan; // Pastikan ini sesuai dengan nama model Anda
use Illuminate\Http\Request;

class makananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('index', compact('makanans')); 
    }
    public function login(){
        return view('login');
    }
    public function about(){
        return view('about');
    }
}