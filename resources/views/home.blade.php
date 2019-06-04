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
                   ここ
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="home-content-outer">
                <div class="home-content-inner">
                   ここ
                </div>
            </div>
        </div>
        <div class="col-md-5">joasdoasod</div>
        <div class="col-md-2"></div>
        <div class="col-md-5">joasdoasod</div>
    </div>
</div>
@endsection
