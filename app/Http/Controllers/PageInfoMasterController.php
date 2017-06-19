<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PageInfos;

class PageInfoMasterController extends Controller {

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('auth.page_info.store', ['user' => $this->user, 'page_title' => 'Page Info', 'sub_title' => '新規作成']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $page_info_master = new PageInfos;
        $page_info_master->fill($request->all())->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $params = PageInfos::find($id);
        $user = $this->user;
        $page_title = 'Page Info';
        $sub_title = 'Edit';
        return view('auth.page_info.show', compact('params', 'user', 'page_title', 'sub_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $params = PageInfos::find($id);
        $user = $this->user;
        $page_title = 'Page Info';
        $sub_title = 'Edit';
        return view('auth.page_info.edit', compact('params', 'user', 'page_title', 'sub_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $page_info_master = PageInfos::find($id);
        $page_info_master->fill($request->all())->save();

        return redirect('page_infos/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
