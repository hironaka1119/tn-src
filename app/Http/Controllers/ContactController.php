<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\Contacted;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\AppController;

class ContactController extends AppController {

    /**
     * お問い合わせフォームのビューを表示
     * @return view お問い合わせフォーム
     */
    public function index() {
        array_push($this->pans, ['name'=>'お問合わせ', 'url'=>'contact']);
        $params = $this->page_infos;
        return view('contents.contact', ['params'=>$this->page_infos, 'pans'=>$this->pans]);
    }

    /**
     * メール送信処理
     * @param  Request $request フォームで入力された値
     * @return redirector       入力画面へリダイレクト
     */
    public function send() {
        $contact_data = Input::get('contact_data');
        Mail::to('contact@tn-innovation.jp')->send(new Contacted($contact_data));

        return response('success', 200);
    }

}
