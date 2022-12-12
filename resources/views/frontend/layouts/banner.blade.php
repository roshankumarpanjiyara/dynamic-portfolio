  @php
      $banner = App\Models\Banner::find(1);
  @endphp
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background: url({{asset($banner->image)}}) top right no-repeat; background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$banner->name}}</h1>
      <p>I'm <span class="typed" data-typed-items="{{$banner->work}}"></span></p>
      <div class="social-links">
        @if ($banner->twitter)
            <a href="{{$banner->twitter}}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        @endif
        @if ($banner->facebook)
            <a hre f="{{$banner->facebook}}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        @endif
        @if ($banner->instagram)
            <a href="{{$banner->instagram}}" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        @endif
        @if ($banner->google)
            <a href="{{$banner->google}}" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
        @endif
        @if ($banner->linkedin)
            <a href="{{url($banner->linkedin)}}" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        @endif
      </div>
    </div>
  </section><!-- End Hero -->
