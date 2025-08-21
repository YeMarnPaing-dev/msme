@extends('members.layouts')
@section('heading', 'LOAN')
@section('title', 'Loan')


{{-- @section('Third', 'Member List') --}}
@section('content')

    <section class="post-container container-fluid py-4">

        <div class="row g-4">
            <!-- LEFT SIDE (Posts) -->
            <div class="col-12 col-md-6">
                <div class="row g-4">

                    <!-- First Post -->

                    @foreach ($loan as $post)
                        <div class="col-12">
                            <div class="btn btn-success"> {{ \Carbon\Carbon::parse($post->created_at)->format('j-F-Y') }}
                            </div>
                            <div class="mt-3 fw-bold">
                                {{ $post->name }}
                            </div>
                            <div class="description mt-3">
                                {{ Str::limit(strip_tags($post->description), 200) }}
                                @auth
                                    <a href="{{ route('post#detail_loan', $post->id) }}">
                                    <button class="btn btn-success btn-sm">Read More</button>
                                </a>
                                @endauth
                            </div>
                        </div>
                    @endforeach


                    <!-- Second Post -->
                    {{-- <div class="col-12">
                    <div class="btn btn-success">06 Feb 2025</div>
                    <div class="mt-3 fw-bold">
                        စက်မှု SME Card ကို Online မှတဆင့် လျှောက်ပေးခြင်း နှင့် ပြုလုပ်ပုံအဆင့်အဆင့် တို့ကို
                        လုပ်ငန်းရှင်များအား နားလည်သိရှိစေရန် ရှင်းလင်းပြောကြားပွဲ
                    </div>
                    <div class="description mt-3">
                        {{ Str::limit('MSME Association အသင်းတို့ပူး​ပေါင်း၍ ၁၁.၂.၂၀၂၀ ရက်(အင်္ဂါနေ့) နေ့တွင် စက်မှု SME Card ကို Online မှတဆင့် ယခုလျှေက် ယခုSME Card ယူစနစ်ဖြင့် လျှောက်ပေးခြင်း နှင့် ပြုလုပ်ပုံအဆင့်အဆင့် တို့ကို လုပ်ငန်းရှင်များအား နားလည်သိရှိစေရန် ရှင်းလင်းပြောကြားပေးမည် ဖြစ်ပါသောကြောင့် MSME Association ရုံးခန်းသို့ ကြွရောက်ပေးရန် လေးစားစွာဖြင့် ဖိတ်ကြားအပ်ပါသည်ခင်ဗျာ။ လုပ်ငန်းရှင်များအနေဖြင့် ယူဆောင်လာရမည့် စာရွက်စာတမ်းများ ၁။ လိုင်စင် ဓာတ်ပုံ ၂။ မှတ်ပုံတင် မိတ္တူ ၃။ အိမ်ထောင်စုဇယား မိတ္တူ ၄။ လုပ်ငန်းလိုင်စင် (၂၀၁၉-၂၀၂၀) MSME ရုံးခန်း - (ပ/၁၈၉) သပြေကုန်း ပွဲရုံတန်း၊ ဇဗ္ဗူသီရိမြို့နယ်၊
                         နေပြည်တော်။​အသေးစိတ်သိရှိလိုပါက ချေးငွေရေးရာကော်မတီ ဥက္ကဌ ဦးအောင်ဇော်ဦး ဖုန်း - 09400886611 MSME Association ပြန်ကြားရေးကော်မတီ', 300) }}
                          <a href="">
                            <button class="btn btn-success btn-sm">Read More</button>
                        </a>
                    </div>
                </div> --}}

                </div>
            </div>

            <!-- RIGHT SIDE (Sidebar) -->
            <div class="col-12 col-md-6">

                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center fw-bold mb-3">RECENT LOAN</div>

                        @foreach ($loan as $post)
                            <div data-bs-toggle="modal" data-bs-target="#myModal-{{ $post->id }}"" class="card glass-card mb-3">
                                <div class="card-body d-flex align-items-center">
                                    <img class="workshop img-fluid me-3" src="{{ asset('home/image/msme.png') }}"
                                        alt="Event Image"
                                        style="width:100px; height:60px; object-fit:cover; border-radius:10px;">
                                    <h5 class="mb-0">{{ $post->name }}....</h5>
                                </div>
                            </div>

                            <div class="modal fade" id="myModal-{{ $post->id }}"" tabindex="-1" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $post->id }}"">{{$post->name}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                             {!! $post->description !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <div class="col-12">
                        <div class="text-center fw-bold">OUR GALLERY</div>
                        <div class="row g-2 mt-3 text-center">
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
                            <div class="col-4"><img class="gallery img-fluid" src="{{ asset('home/image/msme.png') }}"
                                    alt=""></div>
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
