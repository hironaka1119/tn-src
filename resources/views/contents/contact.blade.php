@extends('layouts.base')
@section('title', 'お問い合わせ')

@section('content')

<!-- モーダル・ダイアログ -->
<div class="modal fade" id="sampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                お問い合わせの送信が完了致しました。<br>
                1～2営業日内に御返答させて頂きますので宜しくお願い致します。
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
            </div>
        </div>
    </div>
</div>
<div id="contact-container" class="jumbotron white-container">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-md-12 text-center" style="margin-bottom: 20px;">
                <h2>
                    <span style="letter-spacing:-2px;">────</span>
                    お問い合わせ
                    <span style="letter-spacing:-2px;">────</span>
                </h2>
            </div>
            <div class="col-md-5 contact-text slide-box">
                <h4><i class="fa fa-question-circle" aria-hidden="true"></i>&ensp;何でもお気軽にお問い合わせ下さい。</h4>
                <p>
                    『ホームページ作りたいけど、何からしたらいいの？』とか、『どれぐらいの費用が掛かるの？』とか、
                    気になる事は聞かなきゃわかりませんのでお問い合わせしてスッキリして下さい。
                </p>
                <h4><i class="fa fa-question-circle" aria-hidden="true"></i>&ensp;概算お見積りは無料です。</h4>
                <p>
                    他のホームページを見ていいなぁと思ったホームページを教えて頂いたり、取り敢えず、トップページ、問い合わせページ、他2ページ などやあまり具体的に何も決まっていないけど予算がどれぐらい必要か知りたい場合でもお気軽にお問い合わせください。
                </p>
            </div>
            <div class="col-md-7 slide-box">
                <div id="form-alert" class="alert alert-danger" role="alert"></div>
                <form id="contact-form" class="form-horizontal" action="contacts" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputName">お名前&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="お名前を入力して下さい。" class="form-control" id="InputName" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputNameKana">フリガナ&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="カタカナで入力して下さい。" class="form-control" id="InputNameKana" name="name_kana">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputCompanyName">会社名・団体名</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="会社名・団体名を入力して下さい。" class="form-control" id="InputCompanyName" name="company_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputTel">電話番号</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="半角数字(ハイフンなし)で入力して下さい。" class="form-control" id="InputTel" name="tel_no">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputEmail">メールアドレス&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <input type="email" placeholder="メール形式で入力して下さい。" class="form-control" id="InputEmail" name="mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="InputEmailComfirm">メールアドレス確認&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <input type="email" placeholder="メール形式で入力して下さい。" class="form-control" id="InputEmailComfirm" name="mail_confirm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" style="padding-top: 0;" for="InputSelect">お問い合わせ区分&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <div>
                                <input class="contact-check" name="msg_title" type="checkbox" value="制作について">&ensp;制作について
                                <input class="contact-check" name="msg_title" type="checkbox" value="外注・業務委託について">&ensp;外注・業務委託について
                            </div>
                            <div>
                                <input class="contact-check" name="msg_title" type="checkbox" value="概算お見積り希望">&ensp;概算お見積り希望
                                <input class="contact-check" name="msg_title" type="checkbox" value="その他">&ensp;その他
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" style="padding-top: 0;" for="InputMessage">お問い合わせ内容&ensp;<span class="label label-danger">必須</span></label>
                        <div class="col-sm-8">
                            <textarea name="message" placeholder="お問い合わせ内容を入力して下さい。" style="margin-top: 8px;" class="form-control" id="InputMessage" rows="8" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-success ">入力内容を確認する</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop