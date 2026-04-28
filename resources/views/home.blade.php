@extends('layouts.app')

@section('hero')
<!-- Hero Section -->
  <section class="hero">
    <div class="container text-center">
      <h1 class="display-3 fw-bold mb-3">Strengthen Your Laboratory Beyond Equipment and Personnel</h1>
      <p class="lead fs-3 mb-4">Discover how Quality System Assessments (QSA) can transform your lab operations and ensure consistent, high-quality results.</p>
      <a href="#qsa-services" class="btn btn-primary btn-lg px-5 py-3 me-3">Book a QSA</a>
      <a href="#" class="btn btn-outline-light btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#promoVideoModal">Watch Video</a>
    </div>
  </section>

  <!-- Promotional Video Modal -->
  <div class="modal fade" id="promoVideoModal" tabindex="-1" aria-labelledby="promoVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="promoVideoModalLabel">AfriCheck Quality System Assessments</h5>
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

<!-- Introduction Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Introduction</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="lead">Do you know that the strength of any laboratory is not just in its equipment or personnel—but in its system?</p>
        <p>A well-functioning laboratory depends on strong internal processes, continuous evaluation, and a culture of quality.</p>
      </div>
    </div>
  </div>
</section>

<!-- Problem Statement Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-5">The Challenge</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="lead">Ask yourself this:</p>
        <p class="fw-bold">How well does your laboratory perform when it comes to internal audits or Quality System Assessments (QSA)?</p>
        <p>Many labs operate with hidden gaps that affect accuracy, efficiency, and compliance—often without realizing it.</p>
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

<!-- Our Philosophy Section -->
<section class="py-5 bg-light">
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

<!-- Additional Resource Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-5">Expert Resources</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="lead mb-4">We also provide expert resources like:</p>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">"Mastering Quality: A Practical Guide to IQC Selection & Implementation"</h5>
            <p class="card-text">A comprehensive guide designed to help laboratories improve internal quality control practices.</p>
            <a href="#" class="btn btn-primary">Download Our Practical Guide</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="display-5 fw-bold mb-4">Start Building a Stronger Laboratory Today</h2>
    <p class="lead mb-4">Take the first step towards excellence in laboratory quality management.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="#qsa-services" class="btn btn-light btn-lg">Book a Quality System Assessment</a>
      <a href="#" class="btn btn-outline-light btn-lg">Download Our Practical Guide</a>
      <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Contact Our Experts</a>
    </div>
  </div>
</section>

<!-- Visual Storytelling Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Our Impact in Action</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="{{ asset('images/africheck_heam.jpg') }}" class="img-fluid rounded" alt="Modern laboratory environment">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/africheck_amr.jpg') }}" class="img-fluid rounded" alt="Professionals performing audits">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/africheck_micro.jpg') }}" class="img-fluid rounded" alt="Teams collaborating on quality improvement">
      </div>
    </div>
  </div>
</section>

@endsection