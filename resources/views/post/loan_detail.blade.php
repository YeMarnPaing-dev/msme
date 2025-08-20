@extends('members.layouts')
@section('heading', 'LOAN DETAIL')
@section('title', 'Loan Detail')

@section('head', 'Loans')
@section('Third', 'Loan Detail')
@section('content')

<section class="post-container container-fluid py-4">

    <div class="row g-4">
        <!-- LEFT SIDE (Posts) -->
        <div class="col-12 col-md-6">
            <div class="row g-4">

                <!-- First Post -->
                <div class="col-12">
                    <div class="btn btn-success">{{ \Carbon\Carbon::parse($loans->created_at)->format('j-F-Y') }}</div>
                    <div class="mt-3 fw-bold">
                           {{$loans->name}}
                    </div>
                    <div class="description mt-3">
                        {!! $loans->description !!}

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
                   @foreach ($recent as $post)
                      <div class="d-flex">
                        <img class="workshop img-fluid" src="{{ asset('home/image/msme.png') }}" alt="">
                        {{$post->name}}
                    </div>
                    <hr>

                 @endforeach

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
