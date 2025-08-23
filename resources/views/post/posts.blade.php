@extends('members.layouts')
@section('heading', 'POST')
@section('posts-active', 'active')
@section('title', 'Post')


{{-- @section('Third', 'Member List') --}}
@section('content')

    <section class="post-container container-fluid py-4">

        <div class="row g-4">
            <!-- LEFT SIDE (Posts) -->
            <div class="col-12 col-md-6">
                <div class="row g-4">

                    <!-- First Post -->
                    @foreach ($posts as $post)
                        <div class="col-12">
                            <div class="btn btn-success"> {{ \Carbon\Carbon::parse($post->created_at)->format('j-F-Y') }}
                            </div>
                            <div class="mt-3 fw-bold">
                                {{ $post->title }}
                            </div>
                            <div class="description mt-2">
                                {{ Str::limit(strip_tags($post->detail_description), 300) }}


                                <a href="{{ route('post#detail', $post->id) }}">
                                    <button class="btn btn-success btn-sm">Read More</button>
                                </a>


                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

            <!-- RIGHT SIDE (Sidebar) -->
            <div class="col-12 col-md-6">

                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center fw-bold mb-3">RECENT EVENT</div>

                        @foreach ($posts as $post)
                            <div data-bs-toggle="modal" data-bs-target="#myModal-{{ $post->id }}"
                                class="card glass-card mb-3">
                                <div class="card-body d-flex align-items-center">
                                    <img class="workshop img-fluid me-3" src="{{ asset('home/image/msme.png') }}"
                                        alt="Event Image"
                                        style="width:100px; height:60px; object-fit:cover; border-radius:10px;">
                                    <h5 class="mb-0">{{ $post->title }}....</h5>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal-{{ $post->id }}" tabindex="-1"
                                aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $post->id }}">{{ $post->title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {!! $post->detail_description !!}
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
                        <div class="text-center fw-bold fs-4">OUR GALLERY</div>

                        <!-- Gallery Thumbnails -->
                        <div class="row g-2 mt-3 text-center">
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/a1.jpg') }}" data-index="0" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="a1">
                            </div>
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/a2.jpg') }}" data-index="1" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="a2">
                            </div>
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/a4.jpg') }}" data-index="2" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="a4">
                            </div>
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/a5.jpg') }}" data-index="3" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="a5">
                            </div>
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/a7.jpg') }}" data-index="4" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="a7">
                            </div>
                            <div class="col-4">
                                <img class="gallery img-fluid rounded shadow-sm"
                                    src="{{ asset('home/image/activities/q3.jpg') }}" data-index="5" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal" alt="q3">
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
                                                <img src="{{ asset('home/image/activities/a1.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('home/image/activities/a2.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('home/image/activities/a4.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide3">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('home/image/activities/a5.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide4">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('home/image/activities/a7.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide5">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('home/image/activities/q3.jpg') }}"
                                                    class="d-block w-100 rounded-4 shadow-lg" alt="slide6">
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#galleryCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#galleryCarousel" data-bs-slide="next">
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
