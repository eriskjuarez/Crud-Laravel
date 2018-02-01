<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
  public function index()
  {
    $view = view('admin.posts.index');
    return $view;
  }
  public function create()
  {
    $view = view('admin.posts.create');
    return $view;
  }
  public function store()
  {

  }
}
