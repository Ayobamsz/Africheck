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
.resource-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.resource-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.cta-button {
  transition: all 0.3s ease;
}
.cta-button:hover {
  transform: scale(1.05);
}
</style>

<!-- Resources Hero Section -->
<section class="hero bg-primary text-white py-5 animate-fade-in">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Resources</h1>
    <p class="lead">Tools and guides to enhance your laboratory quality systems</p>
  </div>
</section>

<!-- Featured Guide Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card resource-card animate-fade-in">
          <div class="card-body text-center">
            <i class="fas fa-book-open fa-4x text-primary mb-4"></i>
            <h3 class="card-title">Featured Guide</h3>
            <h4 class="text-primary mb-3">Mastering Quality: A Practical Guide to IQC Selection & Implementation</h4>
            <p class="card-text mb-4">Learn how to:</p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Choose the right internal quality controls</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Implement effective monitoring systems</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Improve result accuracy and consistency</li>
            </ul>
            <a href="#" class="btn btn-primary btn-lg cta-button">
              <i class="fas fa-download me-2"></i>Download Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Other Resources Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-5 animate-fade-in">Other Resources</h2>
    <div class="row g-4">
      <div class="col-md-4 animate-fade-in">
        <div class="card h-100 resource-card">
          <div class="card-body text-center">
            <i class="fas fa-clipboard-list fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Quality System Checklists</h5>
            <p class="card-text">Comprehensive checklists to assess and improve your quality systems.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-fade-in">
        <div class="card h-100 resource-card">
          <div class="card-body text-center">
            <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Audit Preparation Templates</h5>
            <p class="card-text">Ready-to-use templates to prepare for internal and external audits.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-fade-in">
        <div class="card h-100 resource-card">
          <div class="card-body text-center">
            <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Best Practice Guides</h5>
            <p class="card-text">Expert guides on implementing best practices in laboratory quality.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container animate-fade-in">
    <h2 class="display-5 fw-bold mb-4">Access tools that help you build better systems</h2>
    <p class="lead mb-4">Download our resources and start improving your laboratory quality today.</p>
    <a href="#" class="btn btn-light btn-lg cta-button">
      <i class="fas fa-arrow-right me-2"></i>Explore Resources
    </a>
  </div>
</section>
@endsection