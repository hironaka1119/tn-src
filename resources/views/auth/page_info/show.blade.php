@extends('layouts.admin_base')
@section('title', 'お問い合わせ')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">画面SEO情報</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div style="padding: 20px;">
                {{ csrf_field() }}
                <div class="row">
                    <label class="col-sm-2 control-label">Page URL</label>

                    <div class="col-sm-10">
                        <p>{{$params->page_url}}</p>
                    </div>
                    <label for="page_title" class="col-sm-2 control-label">Page Title</label>

                    <div class="col-sm-10">
                        <p>{{$params->page_title}}</p>
                    </div>
                    <label for="page_keyword" class="col-sm-2 control-label">Page Keyword</label>

                    <div class="col-sm-10">
                        <p>{{$params->page_keyword}}</p>
                    </div>
                    <label for="page_desc" class="col-sm-2 control-label">Page Desc</label>

                    <div class="col-sm-10">
                        <p>{{$params->page_desc}}</p>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="index" id="page-info-form-submit" class="btn btn-info pull-right">一覧へ</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
    </div>
</div>
@stop