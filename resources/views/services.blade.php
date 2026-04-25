@extends('layouts.app')

@section('content')
<style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-fade-in {
  animation: fadeInUp 0.8s ease-out;
}
.service-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.process-step {
  position: relative;
  animation: fadeInUp 0.8s ease-out;
}
.process-step::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  width: 2px;
  height: 100%;
  background: #007bff;
  transform: translateX(-50%); 
  z-index: -1; 
}
.process-step:last-child::before {
  height: 50%;
}
</style>

<!-- Services Hero Section -->
<section class="hero bg-primary text-white py-5 animate-fade-in">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Our Services</h1>
    <p class="lead">Comprehensive solutions to elevate your laboratory's quality and efficiency</p>
  </div>
</section>

<!-- Core Services Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5 animate-fade-in">Our Core Services</h2>
    <div class="row g-4">
      <!-- Quality System Assessment -->
      <div class="col-lg-6 animate-fade-in">
        <div class="card h-100 service-card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-search fa-2x text-primary me-3"></i>
              <h4 class="card-title mb-0">1. Quality System Assessment (QSA)</h4>
            </div>
            <p class="card-text">A comprehensive evaluation of your laboratory's internal processes.</p>
            <h6>What we do:</h6>
            <ul class="list-unstyled">
              <li><i class="fas fa-check text-success me-2"></i>Assess operational workflows</li>
              <li><i class="fas fa-check text-success me-2"></i>Identify gaps and risks</li>
              <li><i class="fas fa-check text-success me-2"></i>Provide actionable improvement plans</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Internal Audit Support -->
      <div class="col-lg-6 animate-fade-in">
        <div class="card h-100 service-card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-clipboard-check fa-2x text-primary me-3"></i>
              <h4 class="card-title mb-0">2. Internal Audit Support</h4>
            </div>
            <p class="card-text">We help you prepare for and execute effective internal audits.</p>
            <h6>Includes:</h6>
            <ul class="list-unstyled">
              <li><i class="fas fa-check text-success me-2"></i>Audit planning</li>
              <li><i class="fas fa-check text-success me-2"></i>Checklist development</li>
              <li><i class="fas fa-check text-success me-2"></i>Reporting and recommendations</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Quality Improvement Consulting -->
      <div class="col-lg-6 animate-fade-in">
        <div class="card h-100 service-card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-chart-line fa-2x text-primary me-3"></i>
              <h4 class="card-title mb-0">3. Quality Improvement Consulting</h4>
            </div>
            <p class="card-text">Transform your lab into a high-performance system.</p>
            <h6>Focus areas:</h6>
            <ul class="list-unstyled">
              <li><i class="fas fa-check text-success me-2"></i>Process optimization</li>
              <li><i class="fas fa-check text-success me-2"></i>Efficiency improvement</li>
              <li><i class="fas fa-check text-success me-2"></i>Compliance strengthening</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Training & Capacity Building -->
      <div class="col-lg-6 animate-fade-in">
        <div class="card h-100 service-card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-graduation-cap fa-2x text-primary me-3"></i>
              <h4 class="card-title mb-0">4. Training & Capacity Building</h4>
            </div>
            <p class="card-text">Equip your team with the knowledge to maintain quality systems.</p>
            <h6>Topics include:</h6>
            <ul class="list-unstyled">
              <li><i class="fas fa-check text-success me-2"></i>Quality management systems</li>
              <li><i class="fas fa-check text-success me-2"></i>Internal quality control</li>
              <li><i class="fas fa-check text-success me-2"></i>Continuous improvement practices</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Overview Section --
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-5 animate-fade-in">Process Overview</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="d-flex flex-column align-items-center">
          <div class="process-step text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">1</div>
            <h5 class="mt-3">Initial Consultation</h5>
          </div>
          <div class="process-step text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">2</div>
            <h5 class="mt-3">System Assessment</h5>
          </div>
          <div class="process-step text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">3</div>
            <h5 class="mt-3">Gap Analysis</h5>
          </div>
          <div class="process-step text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">4</div>
            <h5 class="mt-3">Recommendations</h5>
          </div>
          <div class="process-step text-center">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">5</div>
            <h5 class="mt-3">Implementation Support</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section-->

<!-- CTA Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container animate-fade-in">
    <h2 class="display-5 fw-bold mb-4">Ready to improve your lab?</h2>
    <p class="lead mb-4">Let's work together to achieve the highest standards of quality and efficiency.</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="#" class="btn btn-light btn-lg px-4 py-2">
        <i class="fas fa-calendar-check me-2"></i>Book a Service
      </a>
      <a href="#" class="btn btn-outline-light btn-lg px-4 py-2">
        <i class="fas fa-comments me-2"></i>Talk to an Expert
      </a>
    </div>
  </div>
</section>
@endsection