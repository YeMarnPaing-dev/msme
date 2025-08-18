@extends('members.layouts')
@section('heading','MEMBER')
@section('title','Member')
@section('head','Member')
@section('Third','Member List')
@section('content')

<div class="town">{{$township->name}}မြို့နယ်အသင်းဝင်များ</div>
<section class="member-list">
    <div class="row text-center mt-2">

          @foreach ($users as $user)
            <div class=" col-md-3 mt-3">
                <div class="member-card">
                    <img src="{{ asset('home/image/profile/R.png') }}" alt="">
                    <p>{{$user->name_mm}}</p>
                </div>
            </div>


          @endforeach
    </div>

</section>

   <div class="mt-4  d-flex justify-content-center">
    {{ $users->links('pagination::bootstrap-5') }}
</div>



@endsection
