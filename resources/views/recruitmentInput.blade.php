@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <label class="col-sm-2 control-label">紹介先企業</label>
        <div class="col-sm-10">
            <a>株式会社ネットウェブ</a>
        </div>
        <label class="col-sm-2 control-label">職種</label>
        <div class="col-sm-10">
            <a>Webエンジニア</a>
        </div>
        <label class="col-sm-2 control-label">求職者名</label>
        <div class="col-sm-10">
             <input class="form-control" type="text">
        </div>
        <label class="col-sm-2 control-label">求職者プロフィール</label>
        <div class="col-sm-10">
             <input class="form-control" type="text" placeholder="求職者のプロフィールもしくは、プロフィールが記載されているURLを記入してください">
        </div>
        <label class="col-sm-2 control-label">紹介文</label>
        <div class="col-sm-10">
             <input class="form-control" type="text">
        </div>
    </div>
</div>
@endsection
