<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Http\Controllers\AppController;

/**
 * Description of ConseptController
 *
 * @author hirotake.nakamura
 */
class ConseptController extends AppController {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        array_push($this->pans, ['name'=>'できることは？', 'url'=>'concept']);
        $params = $this->page_infos;
        return view('contents.concept', ['params'=>$this->page_infos, 'pans'=>$this->pans]);
        
    }

}
