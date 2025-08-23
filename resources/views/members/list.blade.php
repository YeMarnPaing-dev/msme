@extends('members.layouts')
@section('heading', 'MEMBER')
@section('title', 'Member')
@section('list-active', 'active')
@section('head', 'Member')
@section('Third', 'Member List')
@section('content')

    <div class="town">{{ $township->name }}မြို့နယ်အသင်းဝင်များ</div>
    <section class="member-list">
        <div class="row text-center mt-2">

            @foreach ($users as $user)
                <div data-bs-toggle="modal" data-bs-target="#myModal-{{ $user->id }}" class=" col-md-3 mt-3">
                    <div class="member-card">
                        @php
                            $photoPath = public_path('home/image/profile/' . $user->photo);
                            $photoUrl =
                                $user->photo && file_exists($photoPath)
                                    ? asset('home/image/profile/' . $user->photo)
                                    : asset('home/image/profile/R.png');
                        @endphp
                        <img src="{{ $photoUrl }}" alt="User Photo">
                        <p>{{ $user->name_mm }}</p>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal-{{ $user->id }}" tabindex="-1" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel-{{ $user->id }}">{{ $user->name_mm }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @php
                                    $photoPath = public_path('home/image/profile/' . $user->photo);
                                    $photoUrl =
                                        $user->photo && file_exists($photoPath)
                                            ? asset('home/image/profile/' . $user->photo)
                                            : asset('home/image/profile/R.png');
                                @endphp
                                <img style="width: 100px; margin-bottom:10px; border-radius:10px" src="{{ $photoUrl }}" alt="User Photo">
                                <p>အဘအမည် -- {{ $user->father_mm }}</p>
                                <p>Race -- {{ $user->race }}</p>
                                <p>Education -- {{ $user->education }}</p>
                                <p>Phone -- {{ $user->phone }}</p>
                                <p>Email -- {{ $user->email }}</p>
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
