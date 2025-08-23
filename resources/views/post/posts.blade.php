@extends('members.layouts')
@section('heading', 'POST')
@section('posts-active', 'active')
@section('title', 'Post')


{{-- @section('Third', 'Member List') --}}
@section('content')

  <section class="post-container container-fluid py-5 bg-light">

    <div class="row g-5">
        <!-- LEFT SIDE (Posts) -->
        <div class="col-12 col-lg-8">
            <h2 class="fw-bold mb-4 text-success">Latest Posts</h2>
            <div class="row g-4">

                @foreach ($posts as $post)
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('j F Y') }}
                                </span>
                            </div>

                            <h4 class="fw-bold text-dark">{{ $post->title }}</h4>

                            <p class="text-muted mt-2">
                                {{ Str::limit(strip_tags($post->detail_description), 200) }}
                            </p>

                            <a href="{{ route('post#detail', $post->id) }}" class="btn btn-outline-success btn-sm mt-2">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- RIGHT SIDE (Sidebar) -->
        <div class="col-12 col-lg-4">
            <!-- Recent Events -->
            <div class="mb-5">
                <h4 class="fw-bold text-center text-success mb-4">📌 Recent Events</h4>
                <div class="list-group shadow-sm">
                    @foreach ($posts as $post)
                        <div data-bs-toggle="modal" data-bs-target="#myModal-{{ $post->id }}"
                            class="list-group-item list-group-item-action d-flex align-items-center border-0 mb-2 shadow-sm rounded-3"
                            style="cursor:pointer;">
                            <img class="img-fluid rounded me-3"
                                src="{{ asset('home/image/msme.png') }}"
                                alt="Event Image"
                                style="width:80px; height:60px; object-fit:cover;">
                            <h6 class="mb-0 text-dark">{{ Str::limit($post->title, 40) }}</h6>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal-{{ $post->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $post->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
            </div>

            <!-- Gallery -->
            <div>
                <h4 class="fw-bold text-center text-success mb-4">🖼 Our Gallery</h4>
                <div class="row g-2">
                    @php
                        $gallery = ['a1.jpg','a2.jpg','a4.jpg','a5.jpg','a7.jpg','q3.jpg'];
                    @endphp
                    @foreach ($gallery as $index => $img)
                        <div class="col-4">
                            <img src="{{ asset('home/image/activities/' . $img) }}"
                                 class="img-fluid rounded shadow-sm gallery"
                                 data-bs-toggle="modal" data-bs-target="#galleryModal"
                                 data-index="{{ $index }}" alt="gallery-img">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- Modal with Carousel -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark rounded-4 shadow-lg">
                <div class="modal-body p-0">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('home/image/activities/a1.jpg') }}" class="d-block w-100 rounded-4" alt="slide1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('home/image/activities/a2.jpg') }}" class="d-block w-100 rounded-4" alt="slide2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('home/image/activities/a4.jpg') }}" class="d-block w-100 rounded-4" alt="slide3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('home/image/activities/a5.jpg') }}" class="d-block w-100 rounded-4" alt="slide4">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('home/image/activities/a7.jpg') }}" class="d-block w-100 rounded-4" alt="slide5">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('home/image/activities/q3.jpg') }}" class="d-block w-100 rounded-4" alt="slide6">
                            </div>
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

</section>




@endsection

@section('script')

    <script>
        const galleryImages = document.querySelectorAll('.gallery');
        const galleryCarousel = document.querySelector('#galleryCarousel');

        galleryImages.forEach(img => {
            img.addEventListener('click', function() {
                let index = this.getAttribute('data-index');
                let carousel = bootstrap.Carousel.getInstance(galleryCarousel);
                if (!carousel) {
                    carousel = new bootstrap.Carousel(galleryCarousel);
                }
                carousel.to(index);
            });
        });
    </script>


@endsection
