@extends('layouts.admin_base')
@section('title', 'お問い合わせ')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">画面SEO情報</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            

            <form class="form-horizontal" method="post" action="{{ url('/page_infos') }}" id="page-info-form" data-smk-icon="glyphicon-remove-sign" style="padding: 20px;">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-2 control-label">Page URL</label>

                    <div class="col-sm-10">
                        <input data-smk-pattern="[0-9a-zA-Z-_]+" data-smk-msg="半角英数字を入力して下さい。" 
                               name="page_url" type="text" class="form-control" 
                               placeholder="ルーティングのURLを入力して下さい。">
                    </div>
                </div>
                <div class="form-group">
                    <label for="page_title" class="col-sm-2 control-label">Page Title</label>

                    <div class="col-sm-10">
                        <input name="page_title" type="text" class="form-control" id="page_title" placeholder="ページのタイトルを入力して下さい。">
                    </div>
                </div>
                <div class="form-group">
                    <label for="page_keyword" class="col-sm-2 control-label">Page Keyword</label>

                    <div class="col-sm-10">
                        <input name="page_keyword" type="text" class="form-control" id="page_keyword" placeholder="カンマ区切り(,)でページのキーワードを入力して下さい。">
                    </div>
                </div>
                <div class="form-group">
                    <label for="page_desc" class="col-sm-2 control-label">Page Desc</label>

                    <div class="col-sm-10">
                        <textarea name="page_desc" class="form-control" id="page_desc" rows="3" placeholder="ページの説明文を入力して下さい。"></textarea>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" id="page-info-form-submit" class="btn btn-info pull-right">追加</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
@stop