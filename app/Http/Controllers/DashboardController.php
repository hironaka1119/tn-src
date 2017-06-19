<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PageInfos;

class DashboardController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $page_infos = PageInfos::all();
        $user = Auth::user();
        return view('auth.dashboard', ['user' => $user, 'page_infos' => $page_infos, 'page_title' => 'Dashboard', 'sub_title' => '管理画面']);

    }

}
