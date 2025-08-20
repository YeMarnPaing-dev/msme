@extends('members.layouts')
@section('heading', 'Shops')
@section('title', 'Shops')

@section('head', 'Shops')
@section('Third', 'Shop Detail')

@section('content')

<div class="association-title">
    အငယ်စား၊ အသေးစားနှင့်အလတ်စား စီးပွားရေးလုပ်ငန်းရှင်များအသင်း <br>
    Micro, Small and Medium Enterprises Association
</div>

<section class="shop-detail mt-3">
 <div class="row justify-content-center align-items-center my-4">
  <!-- Shop Image -->
  <div class="col-12 col-md-6 text-center mb-3 mb-md-0">
    <img src="{{ asset('home/image/shops/noshopphoto.png') }}"
         class="img-fluid rounded shadow"
         alt="{{ $shop->shop_name }}">
  </div>

  <!-- Shop Info -->
  <div class="col-12 col-md-6 text-center text-md-start">
    <div class="mb-3" style="font-size:20px; font-weight:800">
      <i class="fa-solid fa-house me-2 text-primary"></i> {{ $shop->shop_name }}
    </div>
    <div class="mb-3" style="font-size:20px; font-weight:800">
      <i class="fa-solid fa-phone-volume me-2 text-success"></i> {{ $shop->shop_phone }}
    </div>
    <div class="mb-3" style="font-size:20px; font-weight:800">
      <i class="fa-solid fa-location-dot me-2 text-danger"></i> {{ $shop->shop_address }}
    </div>
  </div>
</div>

</section>


@endsection

@section('script')

    <script></script>


@endsection
