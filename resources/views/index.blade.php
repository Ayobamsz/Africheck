@extends('layouts.app')

@section('title')
AfriCheck - Quality System Assessments for Laboratories
@endsection

@section('meta')
<meta name="description" content="Strengthen your laboratory beyond equipment and personnel with Quality System Assessments (QSA). Discover how QSA can transform lab operations for consistent, high-quality results.">
<meta name="keywords" content="laboratory quality, quality system assessment, QSA, lab audits, internal quality control, clinical laboratory, lab management, quality assurance">
<meta name="author" content="AfriCheck">
<meta property="og:title" content="AfriCheck - Quality System Assessments for Laboratories">
<meta property="og:description" content="Strengthen your laboratory beyond equipment and personnel with Quality System Assessments (QSA). Discover how QSA can transform lab operations for consistent, high-quality results.">
<meta property="og:image" content="{{ asset('images/africheck_heam.jpg') }}">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="AfriCheck - Quality System Assessments for Laboratories">
<meta name="twitter:description" content="Strengthen your laboratory beyond equipment and personnel with Quality System Assessments (QSA). Discover how QSA can transform lab operations for consistent, high-quality results.">
<meta name="twitter:image" content="{{ asset('images/africheck_heam.jpg') }}">
@endsection


@section('hero')
<!-- Hero Section -->
  <section @class(['hero'])>
    <div @class(['container', 'text-center','mt-5'])>
    <div id="heroCarousel" @class(['carousel','carousel-dark', 'slide', 'carousel-fade']) data-bs-ride="carousel" data-bs-interval="5200" data-bs-pause="false">
      <div @class(['carousel-inner', 'rounded-bottom', 'shadow-lg'])>
        <div @class(['carousel-item', 'active'])>
          <img src="{{ asset('images/africheck_carousel1.jpg') }}" @class(['d-block', 'w-100']) alt="Modern laboratory environment">
          <div class="carousel-caption-top-left text-white bg-dark bg-opacity-75 p-3 rounded">
            <h1 class="h2">Strengthen Your Laboratory Beyond Equipment and Personnel</h1>
            <p class="lead fs-5 mb-3">Discover how Quality System Assessments (QSA) can transform your lab operations and ensure consistent, high-quality results.</p>
            <div class="d-flex flex-column flex-sm-row gap-2">
              <a href="{{ route('services') }}" class="btn btn-primary btn-lg shadow">Explore Solutions</a>
              <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 shadow" data-bs-toggle="modal" data-bs-target="#promoVideoModal">Watch Video</a>
            </div>
          </div>
        </div>
        <div @class(['carousel-item'])>
          <img src="{{ asset('images/africheck_carousel2.jpg') }}" @class(['d-block', 'w-100']) alt="Professionals performing audits">
          <div class="carousel-caption-top-left text-white bg-dark bg-opacity-75 p-3 rounded">
            <h1 class="h2">Strengthen Your Laboratory Beyond Equipment and Personnel</h1>
            <p class="lead fs-5 mb-3">Discover how Quality System Assessments (QSA) can transform your lab operations and ensure consistent, high-quality results.</p>
            <div class="d-flex flex-column flex-sm-row gap-2">
              <a href="{{ route('services') }}" class="btn btn-primary btn-lg shadow">Explore Solutions</a>
              <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 shadow" data-bs-toggle="modal" data-bs-target="#promoVideoModal">Watch Video</a>
            </div>
          </div>
        </div>
        <div @class(['carousel-item'])>
          <img src="{{ asset('images/africheck_carousel3.jpg') }}" @class(['d-block', 'w-100']) alt="Teams collaborating on quality improvement">
          <div class="carousel-caption d-none d-md-block">
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
              <a href="{{ route('services') }}" class="btn btn-primary btn-lg px-5 py-3 shadow">Explore Solutions</a>
              <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow" data-bs-toggle="modal" data-bs-target="#promoVideoModal">Watch Video</a>
            </div>
          </div>
        </div>
      </div>

      <div @class(['carousel-indicators'])>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" @class(['active']) aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <button @class(['carousel-control-prev']) type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span @class(['carousel-control-prev-icon']) aria-hidden="true"></span>
        <span @class(['visually-hidden'])>Previous</span>
      </button>
      <button @class(['carousel-control-next']) type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span @class(['carousel-control-next-icon']) aria-hidden="true"></span>
        <span @class(['visually-hidden'])>Next</span>
      </button>
    </div>
    </div>

  </div>
  </section>

  <!-- Promotional Video Modal -->
  <div @class(['modal', 'fade']) id="promoVideoModal" tabindex="-1" aria-labelledby="promoVideoModalLabel" aria-hidden="true">
    <div @class(['modal-dialog', 'modal-lg'])>
      <div @class(['modal-content'])>
        <div @class(['modal-header'])>
          <h5 @class(['modal-title']) id="promoVideoModalLabel">AFRICHECK Video</h5>
          <button type="button" @class(['btn-close']) data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div @class(['modal-body', 'text-center'])>
          <video controls width="800" height="450" style="max-width: 100%; height: auto;">
            <source src="{{ asset('videos/africheck_1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<!-- What We Offer Section -->
<section @class(['py-5']) id="qsa-services">
  <div @class(['container'])>
    <h2 @class(['section-title', 'text-center', 'mb-5'])>What We Offer</h2>
    <p @class(['lead', 'text-center', 'mb-4'])>Our QSA services help laboratories:</p>
    <div @class(['row', 'g-4'])>
      <div @class(['col-md-6', 'col-lg-3'])>
        <div @class(['card', 'h-100', 'text-center'])>
          <div @class(['card-body'])>
            <i @class(['fas', 'fa-search', 'fa-3x', 'text-primary', 'mb-3'])></i>
            <h5 @class(['card-title'])>Identify Gaps</h5>
            <p @class(['card-text'])>Identify operational and system gaps</p>
          </div>
        </div>
      </div>
      <div @class(['col-md-6', 'col-lg-3'])>
        <div @class(['card', 'h-100', 'text-center'])>
          <div @class(['card-body'])>
            <i @class(['fas', 'fa-chart-line', 'fa-3x', 'text-primary', 'mb-3'])></i>
            <h5 @class(['card-title'])>Improve Performance</h5>
            <p @class(['card-text'])>Improve overall performance and efficiency</p>
          </div>
        </div>
      </div>
      <div @class(['col-md-6', 'col-lg-3'])>
        <div @class(['card', 'h-100', 'text-center'])>
          <div @class(['card-body'])>
            <i @class(['fas', 'fa-shield-alt', 'fa-3x', 'text-primary', 'mb-3'])></i>
            <h5 @class(['card-title'])>Strengthen Systems</h5>
            <p @class(['card-text'])>Strengthen internal quality management systems</p>
          </div>
        </div>
      </div>
      <div @class(['col-md-6', 'col-lg-3'])>
        <div @class(['card', 'h-100', 'text-center'])>
          <div @class(['card-body'])>
            <i @class(['fas', 'fa-users', 'fa-3x', 'text-primary', 'mb-3'])></i>
            <h5 @class(['card-title'])>Build Culture</h5>
            <p @class(['card-text'])>Build a culture of continuous improvement</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why QSA Matters Section -->
<section @class(['py-5'])>
  <div @class(['container'])>
    <h2 @class(['section-title', 'text-center', 'mb-5'])>Why QSA Matters</h2>
    <div @class(['row', 'justify-content-center'])>
      <div @class(['col-lg-8'])>
        <p @class(['lead', 'text-center', 'mb-4'])>Regular Quality System Assessments are critical because:</p>
        <ul @class(['list-unstyled'])>
          <li @class(['mb-3'])><i @class(['fas', 'fa-check-circle', 'text-primary', 'me-2'])></i>Even a single weak point can impact overall performance</li>
          <li @class(['mb-3'])><i @class(['fas', 'fa-check-circle', 'text-primary', 'me-2'])></i>Undetected gaps can lead to inaccurate results</li>
          <li @class(['mb-3'])><i @class(['fas', 'fa-check-circle', 'text-primary', 'me-2'])></i>Inefficiencies can reduce productivity and reliability</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- AIQAS Schemes Section -->
  <section @class(['py-5', 'bg-light'])>
    <div @class(['container']) id="aiqas-schemes">
      <h2 @class(['section-title', 'text-center', 'mb-4'])>Our Impact in Action</h2>
      <h4 @class(['text-left', 'mb-4'])><strong>AIQAS Schemes</strong></h4>

      <div @class(['row', 'g-4'])>
        <div @class(['col-lg-4'])>
          <div @class(['card', 'h-100'])>
            <img src="{{ asset('images/africheck_heam.jpg') }}" @class(['card-img-top']) alt="Heamatology Interlaboratory QC">
            <div @class(['card-body'])>
              <h5 @class(['card-title'])>AFRICHECK Hematology QC Panel</h5>
              <p @class(['card-text'])>This QC panel provides laboratories with a reliable solution for monitoring accuracy in hematological testing. By enabling routine validation of key parameters, it helps identify analytical shifts, maintain instrument performance, and ensure consistency in patient results. The program supports ISO 15189 compliance, reinforcing quality control practices and continuous performance improvement..</p>
              <a href="https://iqas.africheck.com.ng/register" @class(['btn', 'btn-primary'])>Subscribe</a>
            </div>
          </div>
        </div>
        <div @class(['col-lg-4'])>
          <div @class(['card', 'h-100'])>
            <img src="{{ asset('images/africheck_amr.jpg') }}" @class(['card-img-top']) alt="AMR AST Interlaboratory QC">
            <div @class(['card-body'])>
              <h5 @class(['card-title'])>AFRICHECK AMR QC Panel</h5>
              <p @class(['card-text'])>This QC panel enables laboratories to ensure precision and consistency in antimicrobial susceptibility testing (AST). With standardized quality control samples, laboratories can validate testing methods, monitor performance trends, and detect deviations early. This program supports effective antimicrobial stewardship efforts and aligns with ISO 15189 standards for ongoing quality monitoring and reliability of diagnostic results.</p>
              <a href="https://iqas.africheck.com.ng/register" @class(['btn', 'btn-primary'])>Subscribe</a>
            </div>
          </div>
        </div>
        <div @class(['col-lg-4'])>
          <div @class(['card', 'h-100'])>
            <img src="{{ asset('images/africheck_micro.jpg') }}" max-width="50%" @class(['card-img-top']) alt="Research & Veterinary">
            <div @class(['card-body'])>
              <h5 @class(['card-title'])>AFRICHECK Bacterial Identification QC Panel</h5>
              <p @class(['card-text'])>This QC Panel is designed to help laboratories consistently achieve accurate and reliable organism identification. Using well-characterized control materials, this program supports routine internal quality control, method verification, and staff competency assessment. It strengthens confidence in microbiology results while supporting compliance with ISO 15189 requirements for quality assurance and result validity.</p>
              <a href="https://iqas.africheck.com.ng/register" @class(['btn', 'btn-primary'])>Subscribe</a>
            </div>
          </div>
        </div>
        <div @class(['col-lg-4'])>
          <div @class(['card', 'h-100'])>
            <img src="{{ asset('images/africheck_chem.jpg') }}" @class(['card-img-top']) alt="Research & Veterinary">
            <div @class(['card-body'])>
              <h5 @class(['card-title'])>AFRICHECK Clinical Chemistry QC Panel</h5>
              <p @class(['card-text'])>This QC Panel supports laboratories in maintaining high accuracy and consistency across routine biochemical assays. Designed for daily quality control processes, it helps verify analyzer performance, detect analytical errors, and ensure traceability of results. This program enhances laboratory confidence while supporting compliance with ISO 15189 quality management and continuous improvement requirements.</p>
              <a href="https://iqas.africheck.com.ng/register" @class(['btn', 'btn-primary'])>Subscribe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  AIQAS Web Platform Section -->
  <section @class(['py-5', 'bg-light'])>
    <div @class(['container'])>
      <h2 @class(['section-title', 'text-center', 'mb-5'])>AIQAS Web Portal</h2>
      <div @class(['row', 'g-4'])>
        <div @class(['col-lg-4'])>
          <div @class(['card', 'h-100'])>
            <img src="{{ asset('images/africheck_aiqas.jpg') }}" @class(['card-img-top']) alt="Research & Veterinary">
            <div @class(['card-body'])>
              <h5 @class(['card-title', 'fw-bold'])>AIQAS Web Portal</h5>
              <p @class(['card-text'])>Specialised QC solutions for research institutions, food testing, forensic toxicology and veterinary labs.</p>
              <a href="https://iqas.africheck.com.ng/login" @class(['btn', 'btn-warning']) target="_blank">Sign In </a>
              <a href="https://iqas.africheck.com.ng/register" @class(['btn', 'btn-danger']) target="_blank">Sign Up </a>
            </div>
          </div>
        </div>
        </div>
      </div>  
    </div>
  </section>

<!-- Our Philosophy Section -->
<section @class(['py-5', 'bg-white'])>
  <div @class(['container'])>
    <h2 @class(['section-title', 'text-center', 'mb-5'])>Our Philosophy</h2>
    <div @class(['row', 'justify-content-center'])>
      <div @class(['col-lg-8', 'text-center'])>
        <p @class(['lead'])>At AfriCheck, we believe:</p>
        <blockquote @class(['blockquote'])>
          <p @class(['mb-0', 'fw-bold'])>"Quality is not an act—it’s a culture."</p>
        </blockquote>
        <p>It's something you practice every single day, embedded into every process and decision.</p>
      </div>
    </div>
  </div>
</section>

  <!-- Mission / Closing Section -->
  <section @class(['py-5', 'bg-primary', 'text-white', 'text-center'])>
    <div @class(['container'])>
      <h2 @class(['display-5', 'fw-bold'])>Improving Laboratory Quality Across Africa and Beyond</h2>
      <p @class(['lead', 'mt-3'])>With innovative QC solutions, cost-effective programmes and unmatched expertise, Africheck delivers efficiency, accuracy and flexibility to clinical laboratories worldwide.</p>
      <a href="{{ route('about') }}" @class(['btn', 'btn-light', 'btn-lg', 'mt-4'])>Learn About Our Story</a>
    </div>
  </section>
@endsection