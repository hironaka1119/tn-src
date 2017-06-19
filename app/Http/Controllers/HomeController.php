<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class HomeController extends AppController {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('contents.home', ['params'=>$this->page_infos, 'pans'=>$this->pans]);
    }

}
