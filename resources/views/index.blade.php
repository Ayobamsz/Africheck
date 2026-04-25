@extends('layouts.app')

@section('hero')
<!-- Hero Section -->
  <section class="hero">
    <div class="container text-center">
      <h1 class="display-3 fw-bold mb-3">Africheck</h1>
      <p class="lead fs-3 mb-4">Dedicated to Improving Quality of Clinical Laboratory Results Worldwide</p>
      <a href="#" class="btn btn-primary btn-lg px-5 py-3 me-3">Explore Solutions</a>
      <a href="#" class="btn btn-outline-light btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#promoVideoModal">Watch Video</a>
    </div>
  </section>

  <!-- Promotional Video Modal -->
  <div class="modal fade" id="promoVideoModal" tabindex="-1" aria-labelledby="promoVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="promoVideoModalLabel">Africheck Promotional Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
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
<section class="py-5" id="qsa-services">
  <div class="container">
    <h2 class="section-title text-center mb-5">What We Offer</h2>
    <p class="lead text-center mb-4">Our QSA services help laboratories:</p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <i class="fas fa-search fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Identify Gaps</h5>
            <p class="card-text">Identify operational and system gaps</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Improve Performance</h5>
            <p class="card-text">Improve overall performance and efficiency</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Strengthen Systems</h5>
            <p class="card-text">Strengthen internal quality management systems</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <i class="fas fa-users fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Build Culture</h5>
            <p class="card-text">Build a culture of continuous improvement</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why QSA Matters Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Why QSA Matters</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="lead text-center mb-4">Regular Quality System Assessments are critical because:</p>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Even a single weak point can impact overall performance</li>
          <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Undetected gaps can lead to inaccurate results</li>
          <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Inefficiencies can reduce productivity and reliability</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- AIQAS Schemes Section -->
  <section class="py-5 bg-light">
    <div class="container" id="aiqas-schemes">
      <h2 class="section-title text-center mb-5">AIQAS Schemes</h2>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="{{ asset('images/africheck_heam.jpg') }}" class="card-img-top" alt="Heamatology Interlaboratory QC">
            <div class="card-body">
              <h5 class="card-title">Interlaboratory Comparison</h5>
              <p class="card-text">AfriCHECK Inter-laboratory Quality Assessment Scheme (AIQAS) – trusted by laboratories across Africa and beyond.</p>
              <a href="#" class="btn btn-primary">Join AIQAS</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="{{ asset('images/africheck_amr.jpg') }}" class="card-img-top" alt="AMR AST Interlaboratory QC">
            <div class="card-body">
              <h5 class="card-title">Hospital & Clinical Labs</h5>
              <p class="card-text">Tailored QC programmes for hospitals, stand-alone labs and molecular testing facilities.</p>
              <a href="#" class="btn btn-primary">Discover Programmes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="{{ asset('images/africheck_micro.jpg') }}" max-width="50%" class="card-img-top" alt="Research & Veterinary">
            <div class="card-body">
              <h5 class="card-title">Research, Forensic & Veterinary</h5>
              <p class="card-text">Specialised QC solutions for research institutions, food testing, forensic toxicology and veterinary labs.</p>
              <a href="#" class="btn btn-primary">Explore More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="{{ asset('images/africheck_chem.jpg') }}" class="card-img-top" alt="Research & Veterinary">
            <div class="card-body">
              <h5 class="card-title">Research, Forensic & Veterinary</h5>
              <p class="card-text">Specialised QC solutions for research institutions, food testing, forensic toxicology and veterinary labs.</p>
              <a href="#" class="btn btn-primary">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  AIQAS Web Platform Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title text-center mb-5">AIQAS Web Portal</h2>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="{{ asset('images/africheck_aiqas.jpg') }}" class="card-img-top" alt="Research & Veterinary">
            <div class="card-body">
              <h5 class="card-title fw-bold">AIQAS Web Portal</h5>
              <p class="card-text">Specialised QC solutions for research institutions, food testing, forensic toxicology and veterinary labs.</p>
              <a href="https://iqas.africheck.com.ng/login" class="btn btn-warning" target="_blank">Sign In </a>
              <a href="https://iqas.africheck.com.ng/register" class="btn btn-danger" target="_blank">Sign Up </a>
            </div>
          </div>
        </div>
        </div>
      </div>  
    </div>
  </section>

<!-- Our Philosophy Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="section-title text-center mb-5">Our Philosophy</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="lead">At AfriCheck, we believe:</p>
        <blockquote class="blockquote">
          <p class="mb-0 fw-bold">"Quality is not an act—it’s a culture."</p>
        </blockquote>
        <p>It's something you practice every single day, embedded into every process and decision.</p>
      </div>
    </div>
  </div>
</section>

  <!-- Mission / Closing Section -->
  <section class="py-5 bg-primary text-white text-center">
    <div class="container">
      <h2 class="display-5 fw-bold">Improving Laboratory Quality Across Africa and Beyond</h2>
      <p class="lead mt-3">With innovative QC solutions, cost-effective programmes and unmatched expertise, Africheck delivers efficiency, accuracy and flexibility to clinical laboratories worldwide.</p>
      <a href="#" class="btn btn-light btn-lg mt-4">Learn About Our Story</a>
    </div>
  </section>
@endsection