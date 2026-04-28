@extends('layouts.app')

@section('title')
Contact AfriCheck - Get in Touch for Laboratory Quality Solutions
@endsection

@section('meta')
<meta name="description" content="Contact AfriCheck for expert laboratory quality control solutions. Reach out to our team for Quality System Assessments, QC programs, and support for clinical laboratories worldwide.">
<meta name="keywords" content="contact AfriCheck, laboratory quality control, QSA booking, QC support, clinical labs contact, lab quality experts">
<meta name="author" content="AfriCheck">
<meta property="og:title" content="Contact AfriCheck - Get in Touch for Laboratory Quality Solutions">
<meta property="og:description" content="Contact AfriCheck for expert laboratory quality control solutions. Reach out to our team for Quality System Assessments, QC programs, and support for clinical laboratories worldwide.">
<meta property="og:image" content="{{ asset('images/africheck_heam.jpg') }}">
<meta property="og:url" content="{{ url('/contact') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact AfriCheck - Get in Touch for Laboratory Quality Solutions">
<meta name="twitter:description" content="Contact AfriCheck for expert laboratory quality control solutions. Reach out to our team for Quality System Assessments, QC programs, and support for clinical laboratories worldwide.">
<meta name="twitter:image" content="{{ asset('images/africheck_heam.jpg') }}">
@endsection

@section('hero')
<!-- Hero Section -->
  <section @class(['hero'])>
    <div @class(['container', 'text-center'])>
      <h1 @class(['display-4', 'fw-bold'])>Contact Us</h1>
      <p @class(['lead', 'fs-4'])>Get in touch with Africheck – We’re here to support your laboratory quality needs</p>
    </div>
  </section>
@endsection  

@section('content')

    <section @class(['container', 'py-5'])>
        <div @class(['row', 'g-5'])>

        <!-- Contact Form -->
        <div @class(['col-lg-7'])>
            <h2 @class(['section-title', 'mb-4'])>Send Us a Message</h2>
            <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div @class(['row'])>
                <div @class(['col-md-6', 'mb-3'])>
                <label @class(['form-label'])>First Name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" @class(['form-control']) required>
                </div>
                <div @class(['col-md-6', 'mb-3'])>
                <label @class(['form-label'])>Last Name</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" @class(['form-control']) required>
                </div>
            </div>
            <div @class(['mb-3'])>
                <label @class(['form-label'])>Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" @class(['form-control']) required>
            </div>
            <div @class(['mb-3'])>
                <label @class(['form-label'])>Phone Number</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" @class(['form-control'])>
            </div>
            <div @class(['mb-3'])>
                <label @class(['form-label'])>Subject</label>
                <select name="subject" @class(['form-select']) required>
                <option value="">Select Subject</option>
                <option value="iqas" {{ old('subject') === 'iqas' ? 'selected' : '' }}>Join AIQAS Scheme</option>
                <option value="audits" {{ old('subject') === 'audits' ? 'selected' : '' }}>Quality Audits & Improvement Consultation</option>
                <option value="products" {{ old('subject') === 'products' ? 'selected' : '' }}>Quality Control Products</option>
                <option value="training" {{ old('subject') === 'training' ? 'selected' : '' }}>Training & Workshops</option>
                <option value="partnership" {{ old('subject') === 'partnership' ? 'selected' : '' }}>Partnership / Collaboration</option>
                <option value="support" {{ old('subject') === 'support' ? 'selected' : '' }}>Technical Support</option>
                <option value="other" {{ old('subject') === 'other' ? 'selected' : '' }}>Other Enquiry</option>
                </select>
            </div>
            <div @class(['mb-4'])>
                <label @class(['form-label'])>Message</label>
                <textarea name="message" @class(['form-control']) rows="6" placeholder="How can we help your laboratory?" required>{{ old('message') }}</textarea>
            </div>
            <div @class(['mb-4'])>
                <label @class(['form-label'])>Security Challenge</label>
                <div @class(['alert', 'alert-info', 'mb-3'])>
                    <strong>Question:</strong> {{ $question }}
                </div>
                <input type="text" name="security_answer" @class(['form-control']) placeholder="Your answer" required>
                @error('security_answer')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" id="submitBtn" @class(['btn', 'btn-primary', 'btn-lg', 'px-5']) >Send Message</button>
            </form>
            @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <!-- Contact Information -->
        <div @class(['col-lg-5'])>
            <h2 @class(['section-title', 'mb-4'])>Get In Touch</h2>
            
            <div @class(['contact-card', 'card', 'p-4', 'mb-4'])>
            <div @class(['d-flex', 'align-items-start', 'mb-3'])>
                <i @class(['fas', 'fa-map-marker-alt', 'fa-2x', 'text-primary', 'me-3'])></i>
                <div>
                <h5>Head Office</h5>
                <p @class(['mb-0', 'text-muted'])>
                    Plot 1192 Area 1 Durumi, New Road<br>
                    Abuja. Nigeria
                </p>
                </div>
            </div>
            </div>

            <div @class(['contact-card', 'card', 'p-4', 'mb-4'])>
            <div @class(['d-flex', 'align-items-start', 'mb-3'])>
                <i @class(['fas', 'fa-phone', 'fa-2x', 'text-primary', 'me-3'])></i>
                <div>
                <h5>Phone</h5>
                <p @class(['mb-0', 'text-muted'])>
                    <a href="tel:+2349158892203">+234 915 889 2203</a><br>
                    <a href="tel:+2348037013217">+234 803 701 3217</a>
                </p>
                </div>
            </div>
            </div>

            <div @class(['contact-card', 'card', 'p-4', 'mb-4'])>
            <div @class(['d-flex', 'align-items-start', 'mb-3'])>
                <i @class(['fas', 'fa-envelope', 'fa-2x', 'text-primary', 'me-3'])></i>
                <div>
                <h5>Email</h5>
                <p @class(['mb-0', 'text-muted'])>
                    <a href="mailto:info@africheck.com.ng">info@africheck.com.ng</a><br>
                    <a href="mailto:accounts@africheck.com.ng">accounts@africheck.com.ng</a>
                </p>
                </div>
            </div>
            </div>

            <div @class(['contact-card', 'card', 'p-4'])>
            <!--div @class(['d-flex', 'align-items-start'])>
                <i @class(['fas', 'fa-clock', 'fa-2x', 'text-primary', 'me-3'])></i>
                <div>
                <h5>Business Hours</h5>
                <p @class(['mb-0', 'text-muted'])>
                    Monday – Friday: 8:00 AM – 5:00 PM<br>
                    Saturday: 9:00 AM – 2:00 PM
                </p>
                </div>
            </div>
            </div-->

            <!-- Map Placeholder -->
            <div @class(['mt-4'])>
            <h5 @class(['mb-3'])>Our Location</h5>
            <div @class(['ratio', 'ratio-16x9', 'bg-light', 'rounded', 'overflow-hidden'])>
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15761.888606700142!2d7.452120754408239!3d9.020620695245496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0dfa6260bc1f%3A0x52d45e073c08d0b3!2sDurumi%201%20Abuja!5e0!3m2!1sen!2sca!4v1777326342172!5m2!1sen!2sca"
                width="100%" 
                height="250" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
                </iframe>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Mission Teaser -->
    <section @class(['py-5', 'bg-primary', 'text-white', 'text-center'])>
        <div @class(['container'])>
        <h2 @class(['display-6', 'fw-bold'])>Ready to Improve Your Laboratory Quality?</h2>
        <p @class(['lead', 'mt-3'])>Join thousands of laboratories across Africa and beyond who trust Africheck for reliable Quality Control.</p>
        <a href="{{ route('services') }}" @class(['btn', 'btn-light', 'btn-lg', 'mt-3'])>Explore Our Solutions</a>
        </div>
    </section>

@endsection

@section('footer-scripts')
  <script>
    // Enable submit button and allow form submission
    document.addEventListener('DOMContentLoaded', function() {
      const submitBtn = document.getElementById('submitBtn');
      const securityAnswerInput = document.querySelector('input[name="security_answer"]');
      
      // Enable button by default
      if (submitBtn) {
        submitBtn.disabled = false;
      }
      
      // Optional: validate that answer field is not empty before submission
      const contactForm = document.getElementById('contactForm');
      if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
          if (!securityAnswerInput.value.trim()) {
            e.preventDefault();
            alert('Please answer the security question before submitting.');
            securityAnswerInput.focus();
          }
        });
      }
    });
  </script>
@endsection
