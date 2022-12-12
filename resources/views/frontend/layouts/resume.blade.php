    @php
        $about = App\Models\About::find(1);
        $summary = App\Models\Summary::find(1);
        $educations = App\Models\Education::all();
        $experiences = App\Models\Experience::all();
        $certificates = App\Models\Certification::all();
    @endphp
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resume</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-6">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                    <h4>{{$summary->name}}</h4>
                    <p><em>{{$summary->description}}</em></p>
                    <ul>
                    <li>{{$about->phone}}</li>
                    <li>{{$about->email}}</li>
                    <li>{{$summary->information}}</li>
                    </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                @foreach ($educations as $education)
                    <div class="resume-item">
                        <h4>{{$education->course}}</h4>
                        <h5>{{$education->year}}</h5>
                        <p><em>{{$education->institution}}</em></p>
                        <p>{{$education->description}}</p>
                    </div>
                @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($experiences as $experience)
                        <div class="resume-item">
                            <h4>{{$experience->post}}</h4>
                            <h5>{{$experience->year}}</h5>
                            <p><em>{{$experience->company}}</em></p>
                            <p>{{$experience->description}}</p>
                        </div>
                    @endforeach
                    <h3 class="resume-title">Certificate</h3>
                    @foreach ($certificates as $certificates)
                      <div class="resume-item">
                          <h4>{{$certificates->course}}</h4>
                          <h5>{{$certificates->institution}}</h5>
                          <a href="{{$certificates->link}}"><em>{{$certificates->link}}</em></a>
                      </div>
                    @endforeach
                </div>
            </div>

        </div>
      </section><!-- End Resume Section -->
