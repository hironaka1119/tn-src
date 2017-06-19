<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of ProductionFlowController
 *
 * @author hirotake.nakamura
 */
class ProductionFlowController extends AppController {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        array_push($this->pans, ['name'=>'制作の流れ', 'url'=>'production_flow']);
        $params = $this->page_infos;
        return view('contents.production_flow', ['params'=>$this->page_infos, 'pans'=>$this->pans]);
        
    }
}
