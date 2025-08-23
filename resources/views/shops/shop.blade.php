@extends('members.layouts')
@section('heading', 'Shops')
@section('title', 'Shops')
@section('shop-active', 'active')

@section('head', 'Shops')

@section('content')


<div class="association-title">
    MSME အသင်းဝင်များ အတွက် discount ရနိုင်သော ဆိုင်များ
</div>

<div class="select-wrapper">
   <form action="{{ route('shop#index') }}" method="GET">
      <select name="township_id" id="township" onchange="this.form.submit()">
        <option value="">Select Township</option>
        @foreach($townships as $township)
            <option value="{{ $township->id }}"
                {{ request('township_id') == $township->id ? 'selected' : '' }}>
                {{ $township->name }}
            </option>
        @endforeach
      </select>
   </form>
</div>


<section class="member-list">
   <div class="card-container">
       @forelse ($shops as $shop)
           <a href="{{route('shop#detail',$shop->id)}}" style="text-decoration: none">
               <div class="shop-card">
                   <img src="{{ asset('home/image/shops/noshopphoto.png') }}" alt="">
                   <p class="text-muted">{{ $shop->shop_name }}</p>
               </div>
           </a>
       @empty
           <p>No shops available for this township.</p>
       @endforelse
   </div>
</section>




 <div class="mt-4  d-flex justify-content-center">
    {{ $shops->links('pagination::bootstrap-5') }}
</div>



@endsection

@section('script')

    <script></script>


@endsection
