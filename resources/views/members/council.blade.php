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
        <h4>{{$president->name}}</h4>
        <p>{{$president->designation_name}}</p>
    </div>
</div>


<div class="card-container">
   @foreach($users as $user)
    <div class="member-card">
        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
        <h4>{{ $user->user_name }}</h4>
        <p>{{ $user->designation_name }}</p>
    </div>
@endforeach
</div>


</section>

   <div class="mt-4  d-flex justify-content-center">
    {{ $users->links('pagination::bootstrap-5') }}
</div>




@endsection

@section('script')

    <script></script>


@endsection
