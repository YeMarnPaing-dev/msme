@extends('members.layouts')
@section('heading', 'Login')
@section('title', 'Login')


{{-- @section('Third', 'Member List') --}}
@section('content')


<div class="container d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
      <h3 class="card-title text-center mb-3">Login</h3>
      <form action="{{route('login#user')}}" method="POST">
        <!-- CSRF Token if using Laravel -->
        @csrf

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid  @enderror"  name="email" placeholder="Enter email">
          @error('email')
          <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>

        <!-- Phone -->
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control  @error('phone') is-invalid  @enderror"  name="phone" placeholder="Enter phone number">
           @error('phone')
          <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid  @enderror"  name="password" placeholder="Enter password">
           @error('password')
          <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-success w-100">Login</button>
      </form>

      <div class="text-center mt-3">
        <a href="{{route('register#index')}}">Don't have an account? Register</a>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script>
    $(document).ready(function(){
   @if(session('success'))

    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    })

@endif

@if(session('error'))

    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 2000
    })
    @endif
})

</script>

@endsection
