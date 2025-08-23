@extends('members.layouts')
@section('heading', 'LOAN')
@section('posts-active','active')
@section('title', 'Loan')


{{-- @section('Third', 'Member List') --}}
@section('content')

   <section class="post-container container-fluid py-4">
    <div class="row g-4">

        <!-- LEFT SIDE (Posts) -->
        <div class="col-12 col-lg-8">
            <h3 class="fw-bold text-success mb-3">💰 Loan Updates</h3>
            <div class="row g-4">
                @foreach ($loan as $post)
                    <div class="col-12">
                        <div class="card shadow-sm border-0 rounded-4 p-4 h-100">
                            <!-- Date -->
                            <span class="badge bg-success px-3 py-2 mb-2">
                                {{ \Carbon\Carbon::parse($post->created_at)->format('j F Y') }}
                            </span>

                            <!-- Title -->
                            <h5 class="fw-bold text-dark">{{ $post->name }}</h5>

                            <!-- Description -->
                            <p class="text-muted mt-2">
                                {{ Str::limit(strip_tags($post->description), 200) }}
                            </p>

                            <!-- Read More (only if logged in) -->
                            @auth
                                <a href="{{ route('post#detail_loan', $post->id) }}" class="btn btn-outline-success btn-sm">
                                    Read More
                                </a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- RIGHT SIDE (Sidebar) -->
        <div class="col-12 col-lg-4">

            <!-- Recent Loan -->
            <div class="mb-5">
                <h4 class="fw-bold text-center text-success mb-3">📌 Recent Loans</h4>
                <div class="list-group shadow-sm">
                    @foreach ($loan as $post)
                        <div @auth data-bs-toggle="modal" data-bs-target="#myModal-{{ $post->id }}" @endauth
                             class="list-group-item list-group-item-action d-flex align-items-center border-0 mb-2 shadow-sm rounded-3"
                             style="cursor:pointer;">
                            <img class="img-fluid rounded me-3"
                                 src="{{ asset('home/image/msme.png') }}"
                                 alt="Event Image"
                                 style="width:80px; height:60px; object-fit:cover;">
                            <h6 class="mb-0 text-dark">{{ Str::limit($post->name, 40) }}</h6>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal-{{ $post->id }}" tabindex="-1"
                             aria-labelledby="modalLabel-{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold text-success">{{ $post->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $post->description !!}
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
