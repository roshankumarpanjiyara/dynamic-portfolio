  @php
      $banner = App\Models\Banner::find(1);
  @endphp
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>{{$banner->name}}</h3>
      <p>{{$banner->work}}</p>
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
      <div class="copyright">
        &copy; Copyright <strong><span>Roshan Kumar Panjiyara</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="mailto:kumarpanjiyara.roshan@gmail.com">Roshan Kumar Panjiyara</a>
      </div>
    </div>
  </footer><!-- End Footer -->
