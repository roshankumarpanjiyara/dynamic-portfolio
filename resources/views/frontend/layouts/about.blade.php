    @php
        use Carbon\Carbon;
        $about = App\Models\About::find(1);
    @endphp
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>About</h2>
            <p>{{$about->short_description}}</p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <img src="{{asset($about->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>{{$about->title}}</h3>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birthday}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a href="{{$about->website}}">{{$about->website}}</a></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{\Carbon\Carbon::parse($about->birthday)->diff(\Carbon\Carbon::now())->format('%y years');}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a  href="mailto:kumarpanjiyara.roshan@gmail.com">{{$about->email}}</a></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Resume:</strong> <a href="" target="_blank">Download <i class='bx bxs-download bx-tada bx-rotate-180' ></i></a></li>
                  </ul>
                </div>
              </div>
              <p>
                {{$about->long_description}}
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
