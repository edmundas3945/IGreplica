@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img style="height: 150px ;" src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" alt="pic"  class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-3"><strong>153</strong> Posts</div>
                <div class="pe-3"><strong>101k</strong> Followers</div>
                <div class="pe-3"><strong>352</strong> Following</div>
            </div>
            <div><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><strong><a href={{ $user->profile->url }}>{{ $user->profile->url }}</a></strong> </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="data:image/png;base64,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" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="data:image/jpeg;base64,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" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPHcUUkYjMJyJUH-OYnBCjD46iloQM2MiFUA&usqp=CAU" alt="">
        </div>
    </div>
</div>
@endsection
