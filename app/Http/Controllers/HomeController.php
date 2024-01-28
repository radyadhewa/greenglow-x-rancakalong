<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class HomeController extends Controller
{
  public function home()
  {
    return view('home');
  }
  public function about()
  {
    return view('about');
  }
  public function rancakalong()
  {
    return view('about_village.rancakalong');
  }
  public function blog()
  {
    return view('blog');
  }
  public function contact()
  {
    return view('contact');
  }
}
