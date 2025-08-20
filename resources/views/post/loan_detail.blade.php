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
                            {{ $loans->name }}
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
                        <div class="text-center fw-bold mb-3">RECENT LOAN</div>
                        @foreach ($recent as $post)
                            <div data-bs-toggle="modal" data-bs-target="#myModal-{{$post->id}}" class="card glass-card mb-3">
                                <div class="card-body d-flex align-items-center">
                                    <img class="workshop img-fluid me-3" src="{{ asset('home/image/msme.png') }}"
                                        alt="Event Image"
                                        style="width:100px; height:60px; object-fit:cover; border-radius:10px;">
                                    <h5 class="mb-0">{{ $post->name }}....</h5>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-{{$post->id}}" tabindex="-1" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{$post->id}}">{{$post->name}}</h5>
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
