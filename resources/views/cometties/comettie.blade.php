@extends('members.layouts')
@section('heading','Comettie')
@section('title','Comettie')

@section('content')


<div class="town"></div>
<section class="member-list">
    <div class="row text-center mt-2">

          @foreach ($cmt as $cm)
            <div class=" col-md-3 mt-3">
                <div class="member-card">
                    <img style="border-radius: 5px; width:100%" src="{{ asset('home/image/msme (1).png') }}" alt="">
                    <p class="mt-3"><i class="fa-solid fs-3 text-success fa-rocket"></i>{{$cm->cmt_name}}</p>
                </div>
            </div>


          @endforeach
    </div>

</section>

   <div class="mt-4  d-flex justify-content-center">
    {{ $cmt->links('pagination::bootstrap-5') }}
</div>


@endsection
