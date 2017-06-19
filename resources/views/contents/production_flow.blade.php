@extends('layouts.base')
@section('title', '制作の流れ')

@section('content')

<div id="contact-container" class="jumbotron white-container slide-box">
    <div class="container">
        <div id="top-row" class="row">
            <div class="col-xs-12 text-center">
                <h2>
                    <span style="letter-spacing:-2px;">────</span>
                    制作の流れ
                    <span style="letter-spacing:-2px;">────</span>
                </h2>
            </div>
            <div class="col-xs-12">
                <ol class="step-ol" style="list-style: none;">
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>01</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>お問い合わせ</h2>
                                <p>
                                    まずは<a href="contacts">お問い合わせフォーム</a>よりお願いいたします。<br>質問・疑問などありましたら、お気軽にお問い合わせください！
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>02</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>打ち合わせ・お見積</h2>
                                <p>
                                    お問い合わせでいただいた情報を元に、詳細な打ち合わせを行います。ここでお客様のご要望や制作の目的等をお聞きし、打ち合わせの内容をもとにお見積をお出しします。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>03</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>ご契約・ご発注</h2>
                                <p>
                                    お見積の内容をご確認いただき、問題ございませんでしたらここで正式にご契約となります。当事務所からご契約書をお送りします。この時点で制作費の50%をいただきます。入金の確認が取れました時点で制作を開始します。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>04</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>原稿・素材のご準備</h2>
                                <p>
                                    お客様には制作に必要な素材（画像、原稿等）を準備していただきます。素材がない場合は、別途費用がかかりますが、原稿のライティング、写真撮影等も可能です。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>05</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>デザイン</h2>
                                <p>
                                    原稿・素材が揃いましたら、トップページからデザインに着手いたします。基本的にはデザイン制作は1案となります。複数案をご希望の場合は追加で費用が発生します。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>06</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>構築</h2>
                                <p>
                                    お客様にご確認いただき確定したデザインを元に、Webページとして閲覧出来るようにHTMLコーディング（CMS構築）を行います。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>07</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>動作確認</h2>
                                <p>
                                    当事務所の確認用サーバにアップし、お客様に動作の確認をしていただきます。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                Step
                                <span>08</span>
                            </p>
                            <div class="flow-step-right">
                                <h2>公開・納品</h2>
                                <p>
                                    ご確認いただき問題ございませんでしたら、本番環境にアップし、公開をもって納品完了となります。納品完了後、残りの制作費をご入金いただきます。デザインデータの納品をご希望の場合は、別途費用をいただいております。
                                </p>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="flow-step">
                            <p class="flow-step-p">
                                After
                            </p>
                            <div class="flow-step-right">
                                <h2>運用・更新</h2>
                                <p>
                                    公開後の保守業務も承ります。ご希望の方は、お気軽にご相談下さい！
                                </p>
                            </div>
                        </section>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop