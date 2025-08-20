@extends('members.layouts')
@section('heading', 'EXECUTIVE COUNCIL')
@section('title', 'Executive Council')

@section('head', 'Executive Council')
@section('Third', 'Executive Council')
@section('content')

<div class="association-title">
    အငယ်စား၊ အသေးစားနှင့်အလတ်စား စီးပွားရေးလုပ်ငန်းရှင်များအသင်း <br>
    Micro, Small and Medium Enterprises Association
</div>

<section  class="member-list">
  <div class="container-card">
    <div class="card-member">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>U Nay Lin Htile</h4>
        <p>အုပ်ကြီး</p>
    </div>
</div>


<div class="card-container">
    <div class="member-card">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>U Nay Lin Htile</h4>
        <p>အုပ်ကြီး</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>Another Member</h4>
        <p>အသင်းသား</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>Another Member</h4>
        <p>အသင်းသား</p>
    </div>
    <div class="member-card">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>Another Member</h4>
        <p>အသင်းသား</p>
    </div>
</div>


</section>




@endsection

@section('script')

    <script></script>


@endsection
