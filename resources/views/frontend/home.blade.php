@extends('layouts.frontend', [$pageTitle => 'Page Title'])
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">The Easiest Way to Get Your New Job</h1>
                    <p class="hero-subtitle">Each month, more than 3 million job seekers turn to website in their search for
                        work, making over 140,000 applications every single day</p>
                </div>
                <div class="col-lg-6">
                    <div class="search-box">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i class="fas fa-industry"></i></span>
                                    <input type="text" class="form-control border-0 bg-light" placeholder="Industry">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" class="form-control border-0 bg-light" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                                    <input type="text" class="form-control border-0 bg-light" placeholder="Your keyword">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section with Slick Slider -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Browse by category</h2>
                    <p class="mb-5">Find the job that's perfect for you. about 800+ new jobs everyday</p>
                </div>
            </div>

            <div class="category-slider">
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Retail & Products</h5>
                        <i class="fas fa-shopping-bag fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">563 Jobs Available</p>
                </div>
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Content Writer</h5>
                        <i class="fas fa-pen fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">142 Jobs Available</p>
                </div>
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Marketing & Sale</h5>
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">1526 Jobs Available</p>
                </div>
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Finance Human</h5>
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">165 Jobs Available</p>
                </div>
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Security Analyst</h5>
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">254 Jobs Available</p>
                </div>
                <div class="category-card bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Software Management</h5>
                        <i class="fas fa-laptop-code fa-2x text-primary"></i>
                    </div>
                    <p class="text-muted">965 Jobs Available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section with Counter Animation -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Our Achievements</h2>
                    <p class="mb-5">We measure success through dedication, consistency, and real results.</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-number" data-count="15">0</div>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-number" data-count="4000">0</div>
                        <p>Completed Cases</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-number" data-count="13">0</div>
                        <p>Skilled People</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-number" data-count="4">0</div>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs with Tabs -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Featured Jobs</h2>
                </div>
            </div>
            <ul class="nav nav-tabs mb-4" id="jobTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                        role="tab">All Jobs</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fulltime-tab" data-bs-toggle="tab" data-bs-target="#fulltime"
                        type="button" role="tab">Full Time</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="parttime-tab" data-bs-toggle="tab" data-bs-target="#parttime"
                        type="button" role="tab">Part Time</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="remote-tab" data-bs-toggle="tab" data-bs-target="#remote"
                        type="button" role="tab">Remote</button>
                </li>
            </ul>

            <div class="tab-content" id="jobTabsContent">
                <!-- All Jobs Tab -->
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="row">
                        <!-- Job Card 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="job-card card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <div class="company-logo bg-primary me-3">UI/UX</div>
                                            <div>
                                                <h5 class="mb-0">UI / UX Designer</h5>
                                                <p class="text-muted mb-0">Linkedin</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <div class="mb-3">
                                        <span class="tag">AdobeXD</span>
                                        <span class="tag">Figma</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-muted me-1"></i>
                                            <span class="text-muted">New York, US</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-primary">$500/Hour</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="badge-time">Fulltime • 4 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Job Card 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="job-card card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <div class="company-logo bg-success me-3">RN</div>
                                            <div>
                                                <h5 class="mb-0">React Native Developer</h5>
                                                <p class="text-muted mb-0">Quora</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <div class="mb-3">
                                        <span class="tag">React</span>
                                        <span class="tag">NodeJS</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-muted me-1"></i>
                                            <span class="text-muted">New York, US</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-primary">$800/Hour</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="badge-time">Fulltime • 4 minutes ago</span>
                                        <button class="btn btn-primary btn-sm w-100 mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Job Card 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="job-card card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <div class="company-logo bg-warning me-3">SE</div>
                                            <div>
                                                <h5 class="mb-0">Senior System Engineer</h5>
                                                <p class="text-muted mb-0">Nintendo</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <div class="mb-3">
                                        <span class="tag">Python</span>
                                        <span class="tag">AWS</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-muted me-1"></i>
                                            <span class="text-muted">New York, US</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-primary">$250/Hour</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="badge-time">Parttime • 5 minutes ago</span>
                                        <button class="btn btn-primary btn-sm w-100 mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Job Card 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="job-card card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <div class="company-logo bg-info me-3">PM</div>
                                            <div>
                                                <h5 class="mb-0">Products Manager</h5>
                                                <p class="text-muted mb-0">Periscope</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <div class="mb-3">
                                        <span class="tag">Typescript</span>
                                        <span class="tag">Java</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-muted me-1"></i>
                                            <span class="text-muted">New York, US</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-primary">$250/Hour</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="badge-time">Fulltime • 6 minutes ago</span>
                                        <button class="btn btn-primary btn-sm w-100 mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Full Time Jobs Tab -->
                <div class="tab-pane fade" id="fulltime" role="tabpanel">
                    <div class="row">
                        <!-- Full Time Job Cards would go here -->
                        <div class="col-12 text-center py-5">
                            <h4>Full Time Jobs Will Appear Here</h4>
                            <p class="text-muted">These are specialized full-time positions</p>
                        </div>
                    </div>
                </div>

                <!-- Part Time Jobs Tab -->
                <div class="tab-pane fade" id="parttime" role="tabpanel">
                    <div class="row">
                        <!-- Part Time Job Cards would go here -->
                        <div class="col-12 text-center py-5">
                            <h4>Part Time Jobs Will Appear Here</h4>
                            <p class="text-muted">These are flexible part-time positions</p>
                        </div>
                    </div>
                </div>

                <!-- Remote Jobs Tab -->
                <div class="tab-pane fade" id="remote" role="tabpanel">
                    <div class="row">
                        <!-- Remote Job Cards would go here -->
                        <div class="col-12 text-center py-5">
                            <h4>Remote Jobs Will Appear Here</h4>
                            <p class="text-muted">Work from anywhere with these remote positions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p class="lead text-muted">Discover why thousands of job seekers and employers trust JobBox</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "JobBox completely transformed my job search. I found my dream job in just two weeks! The
                                matching system is incredibly accurate and saved me so much time."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                                </div>
                                <div class="client-details">
                                    <h5>Sarah Johnson</h5>
                                    <p>Product Manager at TechCorp</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "As a recruiter, JobBox has helped me find qualified candidates faster than any other
                                platform. The quality of applicants is outstanding and the interface is intuitive."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                                </div>
                                <div class="client-details">
                                    <h5>Michael Chen</h5>
                                    <p>HR Director at InnovateInc</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "I was struggling to find remote work until I discovered JobBox. Their remote job filters
                                and company verifications gave me peace of mind during my job search."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Jessica Williams">
                                </div>
                                <div class="client-details">
                                    <h5>Jessica Williams</h5>
                                    <p>Freelance Developer</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "The career resources on JobBox helped me prepare for interviews and negotiate a better
                                salary. I landed a job with a 30% increase thanks to their guidance."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="David Rodriguez">
                                </div>
                                <div class="client-details">
                                    <h5>David Rodriguez</h5>
                                    <p>Software Engineer at DataSystems</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "JobBox's mobile app made it so easy to apply for jobs on the go. I could quickly save
                                interesting positions and apply during my commute. Highly recommended!"
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/26.jpg" alt="Emily Parker">
                                </div>
                                <div class="client-details">
                                    <h5>Emily Parker</h5>
                                    <p>Marketing Specialist at BrandVision</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "The company insights and salary information on JobBox helped me make an informed decision
                                about my career move. I knew exactly what to expect before applying."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Robert Kim">
                                </div>
                                <div class="client-details">
                                    <h5>Robert Kim</h5>
                                    <p>Data Analyst at FinancePro</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trust-badge">
                <div class="badge-item">
                    <div class="badge-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Trusted Platform</h5>
                    <p>5-star rating on independent reviews</p>
                </div>

                <div class="badge-item">
                    <div class="badge-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h5>Secure & Private</h5>
                    <p>Your data is protected with encryption</p>
                </div>

                <div class="badge-item">
                    <div class="badge-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p>Always here to help you succeed</p>
                </div>
            </div>
        </div>
    </section>


    <!-- News and Blog Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">News and Blog</h2>
                    <p class="mb-5">Get the latest news, updates and tips</p>
                </div>
            </div>
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white">
                        <div class="blog-img"
                            style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-user me-1"></i> William Kend</span>
                                <span><i class="far fa-clock me-1"></i> 06 September</span>
                            </div>
                            <h5>Interview Question: Why Don't You Have a Degree?</h5>
                            <p class="text-muted">Learn how to respond if an interviewer asks you why you don't have a
                                degree, and read example answers that can help you craft</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary">6 min to read</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white">
                        <div class="blog-img"
                            style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-user me-1"></i> Sarah Harding</span>
                                <span><i class="far fa-clock me-1"></i> 06 September</span>
                            </div>
                            <h5>Job Interview Tips: How To Make a Great Impression</h5>
                            <p class="text-muted">Our mission is to create the world's most sustainable healthcare company
                                by creating high-quality healthcare products</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary">8 min to read</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white">
                        <div class="blog-img"
                            style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-user me-1"></i> Steven Jobs</span>
                                <span><i class="far fa-clock me-1"></i> 06 September</span>
                            </div>
                            <h5>39 Strengths and Weaknesses To Discuss in a Job Interview</h5>
                            <p class="text-muted">Our mission is to create the world's most sustainable healthcare company
                                by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary">9 min to read</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="section-title">Our Trusted Partners</h2>
                    <p class="mb-5">Trusted By Leading Brands</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png"
                        class="partner-logo" alt="Linkedin" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Adobe_Corporate_logo.png"
                        class="partner-logo" alt="Adobe" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Bing_logo.svg" class="partner-logo"
                        alt="Bing" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Dailymotion_logo_%282014%29.svg"
                        class="partner-logo" alt="Dailymotion" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Toyota_EU.svg" class="partner-logo"
                        alt="Toyota" height="40">
                </div>
                <div class="col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Honda_Logo.svg" class="partner-logo"
                        alt="Honda" height="40">
                </div>
            </div>
        </div>
    </section>
@endsection
