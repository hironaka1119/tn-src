<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{$params->page_desc}}">
        <meta name="keywords" content="{{$params->page_keyword}}">
        <meta name="google-site-verification" content="XCgV6lRDjMeUQTbwA91Pv7YnnfnJ03ra8bL3BxoALWw" />
        <title>{{$params->page_title}} | トライ ネクスト イノベーション</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('/assets/css/animsition.min.css')}}" rel="stylesheet">
        <link href="{{asset('/css/common.css')}}" rel="stylesheet">
        <link href="{{asset('/css/parts.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/c8bfcefb5a.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/assets/admin-lte/dist/css/AdminLTE.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('/assets/admin-lte/plugins/iCheck/square/blue.css')}}">
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset('/assets/admin-lte/dist/css/skins/_all-skins.min.css')}}">
        <script src="https://use.fontawesome.com/c8bfcefb5a.js"></script>

        @yield('stylesheet')
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="top-posi"><?php include_once("analyticstracking.php") ?>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div id="nav-container" class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbar-col">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-lg hidden-sm hidden-md" style="padding-top: 0;" href="home">
                        <img id="logo-img" src="images/logo_l.png" class="img-responsive" alt="トライネクストイノベーション">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-col" style="">
                    <div class="container">
                        <div class="row">
                            <div class="pull-left hidden-xs">
                                <a href="home">
                                    <img id="logo-img" src="images/logo_l.png" class="img-responsive" alt="トライネクストイノベーション">
                                </a>
                            </div>
                            <div class="pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="concept">できることは？</a></li>
                                    <li><a href="production_flow">制作の流れ</a></li>
                                    <li><a href="price_list">料金について</a></li>
                                    <li><a href="contacts">お問合わせ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pans" class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                @foreach ($pans as $pan)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a style="text-decoration: none;" itemprop="item" href="{{$pan['url']}}"><span itemprop="name">{{$pan['name']}}</span></a>
                    <meta itemprop="position" content="{{$loop->index+1}}" /></span>
                @if (count($pans) > ($loop->index+1))
                    >
                @endif
                @endforeach
            </div>
        </nav>
        <!-- モーダル・ダイアログ -->
        <div class="modal fade" id="login" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="login-box-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form id="login-form" action="{{ url('/login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" id="user-name" class="form-control" name="name" value="{{ old('name') }}" placeholder="account" required autofocus>
                                <i class="fa fa-user form-control-feedback"></i>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" id="user-password" name="password" class="form-control" placeholder="Password" required>
                                <i class="fa fa-lock form-control-feedback" aria-hidden="true"></i>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-xs-4 pull-right">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <a href="register">新規登録</a>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    <!-- /.login-box-body -->
                </div>
                <!-- /.login-box -->
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer" style="height: 40px;padding: 10px;">
        <div class="row text-left">
            <div class="col-md-11">
                <p>Copyright © TRY NEXT INNOVATION All Rights Reserved.</p>
            </div>
            <div class="col-md-1">
                @if (Auth::guest())
                <p><a href="login" class="btn btn-primary">ログイン</a></p>
                @else
                <p><a href="dashboard" class="btn btn-primary">管理画面</a></p>
                @endif
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/animsition.min.js')}}"></script>
    <script src="js/common.js"></script>
    <script src="js/send.js"></script>
    <script src="js/validation.js"></script>
    <!-- iCheck -->
    <script src="{{asset('/assets/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
    </script>
</body>
</html>