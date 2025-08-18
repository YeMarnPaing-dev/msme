@extends('members.layouts')
@section('heading', 'POST DETAIL')
@section('title', 'Post Detail')

@section('head', 'Posts Detail')
{{-- @section('Third', 'Member List') --}}
@section('content')

<section class="post-container container-fluid py-4">

    <div class="row g-4">
        <!-- LEFT SIDE (Posts) -->
        <div class="col-12 col-md-6">
            <div class="row g-4">

                <!-- First Post -->
                <div class="col-12">
                    <div class="btn btn-success">06 Feb 2025</div>
                    <div class="mt-3 fw-bold">
                        စက်မှု SME Card ကို Online မှတဆင့် လျှောက်ပေးခြင်း နှင့် ပြုလုပ်ပုံအဆင့်အဆင့် တို့ကို
                        လုပ်ငန်းရှင်များအား နားလည်သိရှိစေရန် ရှင်းလင်းပြောကြားပွဲ
                    </div>
                    <div class="description mt-3">

                        MSME Association အသင်းတို့ပူး​ပေါင်း၍ ၁၁.၂.၂၀၂၀ ရက်(အင်္ဂါနေ့) နေ့တွင်
                        စက်မှု SME Card ကို Online မှတဆင့် ယခုလျှေက် ယခုSME Card ယူစနစ်ဖြင့် လျှောက်ပေးခြင်း နှင့် ပြုလုပ်ပုံအဆင့်အဆင့်
                        တို့ကို လုပ်ငန်းရှင်များအား နားလည်သိရှိစေရန် ရှင်းလင်းပြောကြားပေးမည် ဖြစ်ပါသောကြောင့် MSME Association ရုံးခန်းသို့ ကြွရောက်ပေးရန်
                        လေးစားစွာဖြင့် ဖိတ်ကြားအပ်ပါသည်ခင်ဗျာ။ လုပ်ငန်းရှင်များအနေဖြင့် ယူဆောင်လာရမည့် စာရွက်စာတမ်းများ ၁။ လိုင်စင် ဓာတ်ပုံ ၂။ မှတ်ပုံတင် မိတ္တူ ၃။
                        အိမ်ထောင်စုဇယား မိတ္တူ ၄။ လုပ်ငန်းလိုင်စင် (၂၀၁၉-၂၀၂၀) MSME ရုံးခန်း - (ပ/၁၈၉) သပြေကုန်း ပွဲရုံတန်း၊ ဇဗ္ဗူသီရိမြို့နယ်၊
                        နေပြည်တော်။​အသေးစိတ်သိရှိလိုပါက ချေးငွေရေးရာကော်မတီ ဥက္ကဌ ဦးအောင်ဇော်ဦး ဖုန်း - 09400886611 MSME Association ပြန်ကြားရေးကော်မတီ

                    </div>
                </div>



            </div>
        </div>

        <!-- RIGHT SIDE (Sidebar) -->
        <div class="col-12 col-md-6">

            <div class="row g-4">
                <div class="col-12">
                    <div class="text-center fw-bold">RECENT EVENT</div>
                    <hr>
                    <div>
                        <img class="workshop img-fluid" src="{{ asset('home/image/msme.png') }}" alt="">
                        Launching on Technical WorkShop
                    </div>
                    <hr>
                    <div>
                        <img class="workshop img-fluid" src="{{ asset('home/image/msme.png') }}" alt="">
                        Launching on Technical WorkShop
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center fw-bold">OUR GALLERY</div>
                    <div class="row g-2 mt-3 text-center">
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                        <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}" alt=""></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




@endsection

@section('script')

    <script></script>


@endsection
