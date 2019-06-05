@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div style="text-align:center">
            <input class="home-search" type="text" name="" value="" placeholder="職業、会社名、カルチャーで検索">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
        <div class="col-md-3 home-"></div>
        <div class="col-md-6">
            <div class="home-content-outer">
                <div class="home-content-inner">
                    <img class="home-content-image" src="{{ asset('image/01.png') }}" alt="">
                    <div class="home-content-text-outer">
                        <a>webエンジニア</a>
                        <h5>未経験からでも成長したいエンジニア募集中！！<br>要件定義〜開発まで自社サービスを通して経験できます</h5>
                        <a class="home-content-culture">失敗を恐れない</a>
                        <a class="home-content-culture">プロ意識</a>
                        <a class="home-content-culture">One Team</a>
                        <div style="margin-top: 6px;">
                            <a class="home-content-company">株式会社ネットウェブ</a>
                            <button class="home-content-button" type="submit" name="button" onclick="location.href='./recruitment/input'">紹介する</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="home-content-outer">
                <div class="home-content-inner">
                    <img class="home-content-image" src="{{ asset('image/02.png') }}" alt="">
                    <div class="home-content-text-outer">
                        <a>webデザイナー</a>
                        <h5>スキルアップできる仕事、企画デザイナー、グラフィックデザイナー募集</h5>
                        <a class="home-content-culture">顧客目線</a>
                        <a class="home-content-culture">オープン</a>
                        <a class="home-content-culture">発言責任</a>
                        <div style="margin-top: 6px;">
                            <a class="home-content-company">株式会社redesign</a>
                            <button class="home-content-button" type="submit" name="button">紹介する</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="home-content-outer">
                <div class="home-content-inner">
                    <img class="home-content-image" src="{{ asset('image/03.png') }}" alt="">
                    <div class="home-content-text-outer">
                        <a>カスタマーサポート</a>
                        <h5>導入企業1000社以上のSaaSシステムの要！<br>顧客一人一人に寄り添ったサポート</h5>
                        <a class="home-content-culture">失敗を恐れない</a>
                        <a class="home-content-culture">プロ意識</a>
                        <a class="home-content-culture">One Team</a>
                        <div style="margin-top: 6px;">
                            <a class="home-content-company">株式会社ネットウェブ</a>
                            <button class="home-content-button" type="submit" name="button">紹介する</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
@endsection
