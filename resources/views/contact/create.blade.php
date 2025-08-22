@extends('members.layouts')
@section('heading','Contact Us')
@section('title','Contact Us')

@section('content')


<section class="my-5">
  <div class="container">
    <div class="row justify-content-center align-items-center">

      <!-- Left Side: Form -->
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <div class="p-4 shadow rounded bg-white h-100 d-flex flex-column justify-content-center">
          <h3 class="mb-4 text-center fw-bold">Contact Us</h3>
          <form action="{{route('contact#store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Name</label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Enter your name">
              @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email</label>
              <input type="email" id="email" name="email" class="form-control @error('email') is-invalid  @enderror" placeholder="Enter your email">
          @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label fw-semibold">Subject</label>
              <input type="subject" id="subject" name="subject" class="form-control @error('subject') is-invalid  @enderror" placeholder="Enter your subject">
            @error('subject') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="message" class="form-label fw-semibold">Message</label>
              <textarea id="message" name="message" class="form-control @error('message') is-invalid  @enderror" rows="4" placeholder="Write your message">

              </textarea>
              @error('message') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success rounded-pill">
                <i class="fa-solid fa-paper-plane me-2"></i> Send Message
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Right Side: Contact Info -->
      <div class="col-12 col-md-6">
        <div class="p-4 h-100 d-flex flex-column justify-content-center">
          <h3 class="team mb-4 fw-bold">Address</h3>
          <div class="fs-6">
            <p><i class="mx-2 fa-solid fa-location-dot text-danger"></i>(ပ/၁၈၉)၊ သပြေကုန်းပွဲရုံတန်း၊ ဇမ္ဗူသီရိမြို့နယ်။</p>
            <p><i class="mx-2 fa-solid fa-phone-volume text-success"></i>09 400 8800 11, 09 400 8800 22, 09 400 8800 33</p>
            <p><i class="mx-2 fa-brands fa-facebook-f text-primary"></i><a href="https://www.facebook.com/msmemyanmar" target="_blank">facebook.com/msmemyanmar</a></p>
            <p><i class="mx-2 fa-solid fa-globe text-info"></i><a href="http://www.msme.org.mm" target="_blank">www.msme.org.mm</a></p>
            <p><i class="mx-2 fa-solid fa-envelope-circle-check text-warning"></i>info@msme.org.mm</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




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
