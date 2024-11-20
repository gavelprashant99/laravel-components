<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>
    <!-- Import Header -->
    <x-header contact-info="Call us: +91-9876543210 | support@domain.com" />

    <nav class="navbar navbar-expand-lg shadow-sm bg-color">
        <div class="container">
            <!-- Hamburger Menu (Mobile View) -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/important-information') }}">Important Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/help') }}">Need Help?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/search') }}">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="main-section bg-gradient-to-light text-dark py-5 position-relative">
        <div class="container text-center">
            <!-- Background Shape -->
            <div class="background-shape"></div>

            <!-- Logo -->
            <div class="mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="img-fluid shadow"
                    style="max-height: 150px;">
            </div>

            <!-- Tagline -->
            <h1 class="display-4 text-primary fw-bold mb-3 animate__animated animate__fadeInDown">
                Welcome to <span class="text-dark">[Your Site Name]</span>
            </h1>

            <!-- Supporting Text -->
            <p class="lead text-secondary mb-4 animate__animated animate__fadeInUp">
                Empowering <strong>[Your Audience]</strong> with <em>[Your Service/Value Proposition]</em>. Let’s build
                something amazing together!
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="animate__animated animate__fadeIn">
                <a href="{{ url('/register') }}" class="btn btn-primary btn-lg rounded-pill me-3 shadow-lg hover-scale">
                    Get Started <i class="bi bi-arrow-right-circle ms-2"></i>
                </a>
                <a href="{{ url('/about') }}" class="btn btn-outline-dark btn-lg rounded-pill shadow-lg hover-scale">
                    Learn More
                </a>
            </div>
        </div>
    </main>

    <section class="statistics bg-gradient text-white py-5">
        <div class="container text-center">
            <!-- Section Title -->
            <h2 class="fw-bold mb-5 text-dark">
                Our Achievements
            </h2>

            <!-- Statistics Row -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card p-4 shadow-lg rounded">
                        <h3 class="display-5 fw-bold text-warning">500+</h3>
                        <p class="fs-5 mt-2 text-dark">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card p-4 shadow-lg rounded">
                        <h3 class="display-5 fw-bold text-warning">1000+</h3>
                        <p class="fs-5 mt-2 text-dark">Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card p-4 shadow-lg rounded">
                        <h3 class="display-5 fw-bold text-warning">10+</h3>
                        <p class="fs-5 mt-2 text-dark">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title text-white">About Us</h5>
                    <p>We are a dedicated team providing solutions for various sectors. Our focus is on efficiency,
                        innovation, and customer satisfaction.</p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title text-white">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">About</a></li>
                        <li><a href="#" class="text-light">Services</a></li>
                        <li><a href="#" class="text-light">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info Section -->
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title text-white">Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill fs-4 me-3"></i>123 Main Street, Suite 456, City, Country</li>
                        <li><i class="bi bi-phone-fill fs-4 me-3"></i>+123 456 7890</li>
                        <li><i class="bi bi-envelope-fill fs-4 me-3"></i>contact@yourdomain.com</li>
                    </ul>
                </div>
            </div>

            <!-- Social Media and Newsletter Section -->
            <div class="row justify-content-center mt-4">
                <div class="col-auto mb-2">
                    <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-instagram fs-4"></i></a>
                </div>
            </div>

            <!-- Copyright Info -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <p class="text-center mb-0">© 2024 Your Company. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
