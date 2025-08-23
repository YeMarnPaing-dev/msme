@extends('members.layouts')
@section('heading', 'POST DETAIL')
@section('title', 'Post Detail')
@section('posts-active','active')

@section('head', 'Posts')
@section('Third', 'Post Detail')
@section('content')

<section class="post-container container-fluid py-4">
    <div class="row g-4">

        <!-- LEFT SIDE (Single Post Detail) -->
        <div class="col-12 col-lg-7">
            <div class="card shadow-sm rounded-4 p-4 border-0 h-100">
                <div class="btn btn-success mb-3">
                    {{ \Carbon\Carbon::parse($posts->created_at)->format('j-F-Y') }}
                </div>
                <h3 class="fw-bold text-dark mb-3">{{ $posts->title }}</h3>
                <div class="description lh-lg">
                    {!! $posts->detail_description !!}
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE (Sidebar) -->
        <div class="col-12 col-lg-5">
            <div class="row g-4">

                <!-- Recent Events -->
                <div class="col-12">
                    <h5 class="text-center fw-bold text-success mb-3">📌 Recent Events</h5>

                    @foreach ($recent as $post)
                        <div class="card glass-card mb-3 shadow-sm border-0"
                             data-bs-toggle="modal"
                             data-bs-target="#myModal-{{ $post->id }}"
                             style="cursor:pointer;">
                            <div class="card-body d-flex align-items-center">
                                <img class="img-fluid me-3 rounded"
                                    src="{{ asset('home/image/msme.png') }}"
                                    alt="Event Image"
                                    style="width:100px; height:60px; object-fit:cover;">
                                <h6 class="mb-0 fw-semibold text-truncate" style="max-width:250px;">
                                    {{ $post->title }}
                                </h6>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal-{{ $post->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content rounded-4 shadow-lg">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">{{ $post->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $post->detail_description !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Gallery -->
                     <div>
    <h4 class="fw-bold text-center text-success mb-3">🖼 Our Gallery</h4>
    <div class="row g-2">
        @php
            $gallery = ['a1.jpg','a2.jpg','a4.jpg','a5.jpg','a7.jpg','q3.jpg'];
        @endphp
        @foreach ($gallery as $index => $img)
            <div class="col-6 col-sm-4">
                <img src="{{ asset('home/image/activities/' . $img) }}"
                     class="img-fluid rounded shadow-sm gallery"
                     style="cursor:pointer; object-fit:cover; height:100px; width:100%;"
                     alt="gallery-img"
                     data-bs-toggle="modal"
                     data-bs-target="#galleryModal"
                     data-bs-slide-to="{{ $index }}">
            </div>
        @endforeach
    </div>
</div>

<!-- Modal with Carousel -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark rounded-4 shadow-lg">
            <div class="modal-body p-0">
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        @foreach ($gallery as $index => $img)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('home/image/activities/' . $img) }}"
                                     class="d-block w-100 rounded-4 shadow-lg"
                                     alt="gallery-slide-{{ $index }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
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
