<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    protected $layouts = 'layouts.admin';
    protected $pageTitle;
    protected $model;

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
