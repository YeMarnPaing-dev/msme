@extends('members.layouts')
@section('heading', 'MEMBER')
@section('title', 'Member')
@section('list-active','active')
@section('head', 'Member')
@section('Third', 'Member List')
@section('content')

    <div class="town">{{ $township->name }}မြို့နယ်အသင်းဝင်များ</div>
    <section class="member-list">
        <div class="row text-center mt-2">

            @foreach ($users as $user)
                <div data-bs-toggle="modal" data-bs-target="#myModal-{{ $user->id }}" class=" col-md-3 mt-3">
                    <div class="member-card">
                        <img src="{{ asset('home/image/profile/R.png') }}" alt="">
                        <p>{{ $user->name_mm }}</p>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal-{{ $user->id }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel-{{ $user->id }}">{{$user->name_mm}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img width="100px" src="{{asset('home/image/profile/R.png')}}" alt="">
                                <p>အဘအမည် -- {{$user->father_mm}}</p>
                                <p>Race -- {{$user->race}}</p>
                                <p>Education -- {{$user->education}}</p>
                                <p>Phone -- {{$user->phone}}</p>
                                <p>Email -- {{$user->email}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <div class="mt-4  d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>



@endsection
