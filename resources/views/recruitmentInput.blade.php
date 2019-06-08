@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
            <input class="form-control" type="text" style="width: 200px;">
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者の関連リンク</div>
        <div class="col-sm-10 recruitment-input-content">
            <input class="form-control" type="text" placeholder="求職者のプロフィールがわかるURLを記入してください（facebook、twitter、wantedly、githubなど）">
            <a href="" class="recruitment-input-add-link">関連リンク追加する</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介文</div>
        <div class="col-sm-10 recruitment-input-content">
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <button class="home-content-button" type="submit" name="button" onclick="location.href='./confrim'">確認</button>
    </div>
</div>
@endsection
