<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
public function index()
{
  $view = view('admin.cities.index');
  return $view;
}
public function create()
{
  $view = view('admin.cities.create');
  return $view;
}
public function store()
{

}
}
