@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 recruitment-input-content" style="margin-bottom: 30px;">
            <a>以下の内容で紹介します。</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介先企業</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>株式会社ネットウェブ</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">応募職種</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>Webエンジニア</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者名</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>藤井和樹</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者の関連リンク</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>https://www.facebook.com/kazuki.hujiixxxxxxx</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介文</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>藤井は弊社にて、新規事業立ち上げ案件を複数経験しております。</a>
            <a>彼のより良いユーザ体験を追求したいとの想いと、御社が望む条件が一致しましたのでご紹介させていただきました。ご検討のほどよろしくお願いします。</a>
        </div>
        <button class="home-content-button" type="submit" name="button" onclick="location.href='../home'">実行</button>
    </div>
</div>
@endsection
