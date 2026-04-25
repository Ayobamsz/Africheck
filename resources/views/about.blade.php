@extends('layouts.app')

@section('content')
<!-- About Hero Section -->
<section class="hero bg-primary text-white py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">About Africheck</h1>
    <p class="lead">Dedicated to Improving Quality of Clinical Laboratory Results Worldwide</p>
  </div>
</section>

<!-- Who We Are Section -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-title mb-4">Who We Are</h2>
        <p class="lead">We are a quality-focused organization dedicated to strengthening laboratory systems through structured assessments and continuous improvement strategies.</p>
      </div>
    </div>
  </div>
</section>

<!-- Mission and Vision Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <h3 class="card-title text-primary">Our Mission</h3>
            <p class="card-text">To empower laboratories with the tools, insights, and systems needed to consistently deliver accurate and reliable results.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <h3 class="card-title text-primary">Our Vision</h3>
            <p class="card-text">A world where every laboratory operates at the highest standard of quality and efficiency.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Approach Section -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="section-title text-center mb-4">Our Approach</h2>
        <p class="mb-4">We focus on:</p>
        <ul class="list-unstyled">
          <li class="mb-3">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-success me-3"></i>
              <span>System-based evaluation (not just surface checks)</span>
            </div>
          </li>
          <li class="mb-3">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-success me-3"></i>
              <span>Practical, actionable recommendations</span>
            </div>
          </li>
          <li class="mb-3">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-success me-3"></i>
              <span>Long-term quality culture development</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="section-title text-center mb-4">Why Choose Us</h2>
        <div class="row g-4">
          <div class="col-md-4 text-center">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <i class="fas fa-brain fa-3x text-primary mb-3"></i>
                <h5 class="card-title">Deep Understanding</h5>
                <p class="card-text">Deep understanding of laboratory systems</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                <h5 class="card-title">Practical Solutions</h5>
                <p class="card-text">Practical, implementation-focused solutions</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                <h5 class="card-title">Continuous Improvement</h5>
                <p class="card-text">Commitment to continuous improvement</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection