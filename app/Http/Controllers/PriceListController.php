<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Http\Controllers\AppController;

/**
 * Description of PriceListController
 *
 * @author hirotake.nakamura
 */
class PriceListController extends AppController {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        array_push($this->pans, ['name'=>'料金について', 'url'=>'price_list']);
        $params = $this->page_infos;
        return view('contents.price_list', ['params'=>$this->page_infos, 'pans'=>$this->pans]);
        
    }
}
