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
            @foreach ($jobOfferList as $jobOffer)
            <div class="col-md-6">
                <div class="home-content-outer">
                    <div class="home-content-inner">
                        <img class="home-content-image" src="{{ asset('image/'. $jobOffer->image_name) }}" alt="">
                        <div class="home-content-text-outer">
                            <a>{{ $jobOffer->job_name }}</a>
                            <h5>{{ $jobOffer->title }}</h5>
                            @if(!blank($jobOffer->company_feature1))
                                <a class="home-content-culture">{{ $jobOffer->company_feature1 }}</a>
                            @endif
                            @if(!blank($jobOffer->company_feature2))
                                <a class="home-content-culture">{{ $jobOffer->company_feature2 }}</a>
                            @endif
                            @if(!blank($jobOffer->company_feature3))
                                <a class="home-content-culture">{{ $jobOffer->company_feature3 }}</a>
                            @endif
                            @if(!blank($jobOffer->company_feature4))
                                <a class="home-content-culture">{{ $jobOffer->company_feature4 }}</a>
                            @endif
                            @if(!blank($jobOffer->company_feature5))
                                <a class="home-content-culture">{{ $jobOffer->company_feature5 }}</a>
                            @endif
                            <div style="margin-top: 6px;">
                                <a class="home-content-company">{{ $jobOffer->company_name }}</a>
                                <button class="home-content-button" type="submit" name="button" onclick="location.href='./recruitment/input'">紹介する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
@endsection
