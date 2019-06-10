@extends('layouts.app')

@section('content')
<form name="recruitmentInputForm" action="../../recruitment/confrim" method="post">
{{ csrf_field() }}
<div class="container">
    <div class="row justify-content-center">
        @if(empty($jobOffer))
        <div class="col-sm-12 recruitment-input-content" style="text-align: center;">データが存在しませんでした。戻るをクリックして検索をやり直してください。</div>
        <button class="home-content-button" type="submit" name="button" onclick="location.href='../../home'">戻る</button>
        @else
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
            <input name="job_seeker_name" class="form-control" type="text" style="width: 200px;">
        </div>
        <div class="col-sm-2 recruitment-input-content">求職者の関連リンク</div>
        <div class="col-sm-10 recruitment-input-content">
            <input name="job_seeker_link1" class="form-control" type="text" placeholder="求職者のプロフィールがわかるURLを記入してください（facebook、twitter、wantedly、githubなど）">
            <a href="" class="recruitment-input-add-link">関連リンク追加する</a>
        </div>
        <div class="col-sm-2 recruitment-input-content">紹介文</div>
        <div class="col-sm-10 recruitment-input-content">
            <textarea name="introduction" class="form-control" rows="4"></textarea>
        </div>
        <button class="home-content-button" type="submit" name="action" value="confrim">確認</button>
        @endif
    </div>
</div>
</form>
@endsection
