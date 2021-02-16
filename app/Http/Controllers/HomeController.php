<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qusai\DashboardMaker\DashboardMaker;
class HomeController extends Controller
{
    public function index()
    {
        $t = new DashboardMaker();
        return $t->makeDashboard('Qusia');
    }
}
