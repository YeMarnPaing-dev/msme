@extends('members.layouts')
@section('title','Member')
@section('content')

 <div class="town">မြို့နယ်အလိုက်အသင်းများ</div>
<section class="committee container my-4">

<a href="" class="anchor"  style="text-decoration: none; color: inherit;">
    <div class="row g-3">
 @foreach($townships as $town)
        <div class="col-12 col-sm-6 col-md-3">
            <div style="display: block;" class="box-1">{{ $town->name }}
                 <div class="icon-user"><i class="fa-solid fa-users"></i>{{ $town->user_count }}</div>
                 <div>More Info <i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    @endforeach

  </div>
</a>

</section>

@endsection
