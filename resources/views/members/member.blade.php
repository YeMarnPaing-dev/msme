@extends('members.layouts')
@section('heading','MEMBER')
@section('title','Members')
@section('head','Members')
@section('content')

 <div class="town">မြို့နယ်အလိုက်အသင်းများ</div>
<section class="committee container my-4">

<div class="row g-3">
    @foreach($townships as $town)
        <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('list#member', $town->id) }}" class="anchor" style="text-decoration: none; color: inherit;">
                <div style="display: block;" class="box-1">
                    {{ $town->name }}
                    <div class="icon-user">
                        <i class="fa-solid fa-users"></i> {{ $town->user_count }}
                    </div>
                    <div>
                        More Info <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>


</section>

@endsection
