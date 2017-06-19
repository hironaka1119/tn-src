@extends('layouts.base')
@section('title', 'ホームページ作成')
@section('stylesheet')
<!--自作CSS -->
<style type="text/css">
    #top {
        background:url(images/top_img.gif) center no-repeat;
        background-size: cover;
        height: 400px;
        position: relative;
        margin-bottom: 0;
    }
</style>
@stop
@section('content')
<div id="top" class="jumbotron hidden-xs">
    <div class="container">
        <div id="top-row">
            <div class="col-xs-6" style="padding: 0;">
                <h1 id="jumbo-title">TRY NEXT<br>INNOVATION</h1>
            </div>
            <div class="col-xs-6" style="padding: 0;color: #fff;">
                <p id="top-sub-title" style="margin-top: 20px;font-weight: bold;">
                    沖縄の個人事業主、中小企業を応援する。<br>
                    一緒に、伝えたいことを伝えられるホームページを作っていきましょう。
                </p>
            </div>
        </div>
    </div>
</div>
<div id="container-1" class="jumbotron dark-container">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>
                    <span style="letter-spacing:-2px;">────</span>
                    What's『TRY NEXT INNOVATION』?
                    <span style="letter-spacing:-2px;">────</span>
                </h3>
            </div>
            <div class="col-md-6 text-left slide-box" style="line-height: 3em;">
                <p style="max-width: 800px;margin: auto;">
                    <strong class="under-line" style="font-weight: bold;">『TRY NEXT INNOVATION（トライ ネクスト イノベーション）』</strong>は、
                    沖縄県中頭郡西原町にある個人・フリーランスのホームページ制作事業所です。<br><br>
                    <span class="hidden-xs">屋号の意味は『次なる革新への挑戦』みたいな意気込みで考えました。</span>
                </p>
            </div>
            <div class="col-md-6 text-left slide-box" style="line-height: 3em;">
                <h4>『思った通りではなく、思った以上に』</h4>
                <p>
                    簡単に言うと同じホームページを作るならちょっとした<strong>スパイス</strong>をホームページに入れることにより、
                    <strong class="under-line">『思った通りではなく、思った以上に』</strong>と、思えるようなホームページを作りたい
                    という思いで生まれたのが<strong>『TRY NEXT INNVATION（トライ ネクスト イノベーション）』</strong>という屋号です。
                </p>
            </div>
        </div>
    </div>
</div>
<div id="container-2" class="jumbotron blue-container">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12">
                <h3>
                    <span style="letter-spacing:-2px;">────</span>
                    Service
                    <span style="letter-spacing:-2px;">────</span>
                </h3>
            </div>
            <div class="col-xs-12 text-center hidden-sm hidden-xs slide-box">
                <img class="img-responsive" src="images/service-img.gif" alt="Jquery">
            </div>
            <div class="col-md-3 col-sm-6">
                <h4><i class="fa fa-object-group" aria-hidden="true"></i>&ensp;レスポンシブ対応</h4>
                <p>パソコン、タブレット、スマートフォンに対応したサイトの作成やサイトのリニューアルをユーザーファーストの視線で作成</p>
            </div>
            <div class="col-md-3 col-sm-6">
            <h4><i class="fa fa-database" aria-hidden="true"></i>&ensp;データ解析</h4>
            <p>アクセス解析、サイト公開による費用対効果などの解析により、サイトの弱い所やキーワードの絞り込みよるサイトのデータ解析</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4><i class="fa fa-line-chart" aria-hidden="true"></i>&ensp;アクセス向上</h4>
                <p>データ解析によるCEO対策、アクセスするユーザーに絞り込んだサイトのデザイン、構築や逆に弱いところなどを対策</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4><i class="fa fa-users" aria-hidden="true"></i>&ensp;ユーザーファースト</h4>
                <p>クライアント様のご要望も大事ですが実際に使うユーザーの目線でも見ることで、より使いやすく、またアクセスしたいと思えるホームページを作成します。</p>
            </div>
        </div>
    </div>
</div>
<div id="container-3" class="jumbotron white-container text-center" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>
                    <span style="letter-spacing:-2px;">────</span>
                    Portfolio
                    <span style="letter-spacing:-2px;">────</span>
                </h3>
            </div>
            <div class="col-xs-12 slide-box">
                <h4>只今、準備中！！！</h4>
                <p>まだ開業間もないの為、サンプルを作成中です。<br>作成ができしたい随時公開していきます。</p>
            </div>
        </div>
    </div>
</div>
<div id="container-4" class="jumbotron dark-container">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>
                    <span style="letter-spacing:-2px;">────</span>
                    Company Profile
                    <span style="letter-spacing:-2px;">────</span>
                </h3>
            </div>
            <div class="col-md-6 slide-box">
                <table class="table-striped company-pr-table">
                    <tr>
                        <th class="t-header" style="width: 100px;">事業所名</th><td>TRY NEXT INNOVATION<br>(トライ　ネクスト　イノベーション)</td>
                    </tr>
                    <tr>
                        <th class="t-header">事業形態</th><td>個人事業主（フリーランス・SOHO）</td>
                    </tr>
                    <tr>
                        <th class="t-header">代表者</th><td>仲村　広剛</td>
                    </tr>
                    <tr>
                        <th class="t-header">設立</th><td>2017年2月</td>
                    </tr>
                    <tr>
                        <th class="t-header">所在地</th><td>沖縄県中頭郡西原町<br><span>※自宅兼事務所のため、ご発注いただいたお客様のみお知らせいたします。</span></td>
                    </tr>
                    <tr>
                        <th class="t-header">TEL</th><td><span>※自宅兼事務所のため、ご発注いただいたお客様のみお知らせいたします</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 slide-box">
                <table class="table-striped company-pr-table">
                    <tr>
                        <th class="t-header" style="width: 100px;">営業時間</th><td>9:00～18:00<br><span>(TELで連絡が取れる時間になります。)</span></td>
                    </tr>
                    <tr>
                        <th class="t-header">定休日</th><td>土・日・祝日</td>
                    </tr>
                    <tr>
                        <th class="t-header">事業内容</th>
                        <td>
                            <ul>
                                <li>ホームページ制作</li>
                                <li>WEBデザイン制作</li>
                                <li>HTML+CSSコーディング</li>
                                <li>更新システム<br>(Wordpress)設置・カスタマイズ</li>
                                <li>WEB制作企画</li>
                                <li>ホームページ運用・保守</li>
                                <li>スマートフォンサイト制作</li>
                                <li>システム開発（WEB、デスクトップ　等）</li>
                                <li>パンフレット・ポスターなどの印刷物デザイン　等</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop