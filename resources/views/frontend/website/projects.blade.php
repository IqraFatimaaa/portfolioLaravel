<!-- Projects Start -->
<div class="container-xxl py-6 pt-5" id="project">
    <div class="container">

        <!-- Heading -->
        <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">My Projects</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                    <li class="mx-3 active" data-filter="*">All Projects</li>
                    <li class="mx-3" data-filter=".first">UI / UX Design</li>
                    <li class="mx-3" data-filter=".second">Graphic Design</li>
                </ul>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">

            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="card border-0 shadow-sm">
                    <img class="card-img-top" src="{{ asset('frontend/img/project-2.jpg') }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">UI Portfolio Design</h5>
                        <p class="card-text text-muted">UI / UX</p>
                       <!-- View Image Button -->


<!-- Live Project Button -->
<a href="https://portfolio-update-self.vercel.app/" 
   class="btn btn-outline-success btn-sm"
   target="_blank"
   rel="noopener noreferrer">
    <i class="fa fa-external-link"></i> View Project
</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="card border-0 shadow-sm">
                    <img class="card-img-top" src="{{ asset('frontend/img/project-3.jpg') }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Graphic Branding</h5>
                        <p class="card-text text-muted">Graphic Design</p>
                        <a href="{{ asset('frontend/img/project-3.jpg') }}"
                           class="btn btn-outline-primary btn-sm"
                           data-lightbox="portfolio">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="card border-0 shadow-sm">
                    <img class="card-img-top" src="{{ asset('frontend/img/project-4.jpg') }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Website UI Design</h5>
                        <p class="card-text text-muted">UI / UX</p>
                        <a href="{{ asset('frontend/img/project-4.jpg') }}"
                           class="btn btn-outline-primary btn-sm"
                           data-lightbox="portfolio">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="card border-0 shadow-sm">
                    <img class="card-img-top" src="{{ asset('frontend/img/project-5.jpg') }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Creative Poster</h5>
                        <p class="card-text text-muted">Graphic Design</p>
                        <a href="{{ asset('frontend/img/project-5.jpg') }}"
                           class="btn btn-outline-primary btn-sm"
                           data-lightbox="portfolio">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="card border-0 shadow-sm">
                    <img class="card-img-top" src="{{ asset('frontend/img/project-6.jpg') }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile App UI</h5>
                        <p class="card-text text-muted">UI / UX</p>
                        <a href="{{ asset('frontend/img/project-6.jpg') }}"
                           class="btn btn-outline-primary btn-sm"
                           data-lightbox="portfolio">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Projects End -->
