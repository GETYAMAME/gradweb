@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 recruitment-input-content" style="margin-bottom: 30px;">
            <a>以下の内容で紹介します。</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介先企業</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>{{ $jobOffer->company_name }}</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">応募職種</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>{{ $jobOffer->job_name }}</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者名</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>{{ $request->input('job_seeker_name') }}</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者の関連リンク</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>{{ $request->input('job_seeker_link1') }}</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介文</div>
        <div class="col-sm-10 recruitment-input-content">
            <a>{{ $request->input('introduction') }}</a>
        </div>
        <button class="home-content-button" type="submit" name="button" onclick="location.href='../home'">実行</button>
    </div>
</div>
@endsection
