<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;
use App\PageInfos;

/**
 * Description of AppController
 *
 * @author 広剛
 */
class AppController extends Controller {
    
    protected $items = [];
    protected $page_infos = [];
    protected $pans = [];


    public function __construct(Router $router) {
        $route = $router->getCurrentRoute()->uri();
        if($route === '/'){
            $route = 'home';
        }
        $page_info = PageInfos::pageInfoGet($route)->get();
        $this->page_infos = $page_info[0];
        $this->pans[0] = ['name'=>'HOME', 'url'=>'home'];
    }
}
