@extends('members.layouts')
@section('heading', 'EXECUTIVE COUNCIL')
@section('list-active', 'active')
@section('title', 'Executive Council')

@section('head', 'Executive Council')
@section('Third', 'Executive Council')
@section('content')

    <div class="association-title">
        အငယ်စား၊ အသေးစားနှင့်အလတ်စား စီးပွားရေးလုပ်ငန်းရှင်များအသင်း <br>
        Micro, Small and Medium Enterprises Association
    </div>

    <section class="member-list">
        <div class="container-card">
            <div class="card-member">
                @php
                    $photoPath = public_path('home/image/profile/' . $president->photo);
                    $photoUrl =
                        $president->photo && file_exists($photoPath)
                            ? asset('home/image/profile/' . $president->photo)
                            : asset('home/image/profile/R.png');
                @endphp
                <img src="{{ $photoUrl }}" alt="User Photo">
                <h4>{{ $president->name }}</h4>
                <p>{{ $president->designation_name }}</p>
            </div>
        </div>


        <div class="card-container">
            @foreach ($users as $user)
                <div class="member-card">
                    @php
                        $photoPath = public_path('home/image/profile/' . $user->photo);
                        $photoUrl =
                            $user->photo && file_exists($photoPath)
                                ? asset('home/image/profile/' . $user->photo)
                                : asset('home/image/profile/R.png');
                    @endphp
                    <img src="{{ $photoUrl }}" alt="User Photo">
                    <h4>{{ $user->user_name }}</h4>
                    <p>{{ $user->designation_name }}</p>
                </div>
            @endforeach
        </div>


    </section>

    {{-- <div class="mt-4  d-flex justify-content-center">
    {{ $users->links('pagination::bootstrap-5') }}
</div> --}}




@endsection

@section('script')

    <script></script>


@endsection
