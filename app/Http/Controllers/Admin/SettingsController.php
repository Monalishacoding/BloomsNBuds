<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller {

    public function __construct(){}

    public function index () {
        return view('admin.settings.index');
    }

}
