<header class="header bg-light shadow-sm">
    <div class="container py-3 d-flex align-items-center justify-content-between">
        <!-- Left: Logo -->
        <div class="logo">
            <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid logo-img">
                <span class="brand-name">YourBrand</span>
            </a>
        </div>

        <!-- Middle: Contact Info -->
        <div class="contact-info d-none d-md-block text-center">
            <p class="mb-0 contact-text">{{ $contactInfo }}</p>
        </div>

        <!-- Right: Buttons -->
        <div class="auth-buttons">
            @guest
                <a href="#" class="btn btn-outline-primary btn-auth me-2">Login</a>
                <a href="#" class="btn btn-primary btn-auth">Register</a>
            @else
                <a href="#" class="btn btn-success btn-auth">Dashboard</a>
            @endguest
        </div>
    </div>
</header>
