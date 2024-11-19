<header class="bg-light shadow-sm">
    <div class="container py-3 d-flex align-items-center justify-content-between">
        <!-- Left: Logo -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="height: 50px;">
            </a>
        </div>

        <!-- Middle: Contact Info -->
        <div class="contact-info text-center">
            <p class="mb-0 text-muted" style="font-family: 'Arial', sans-serif; font-size: 14px;">
                {{ $contactInfo }}
            </p>
        </div>

        <!-- Right: Buttons -->
        <div class="auth-buttons">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2 rounded-0">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-0">Register</a>
            @else
                <a href="{{ route('dashboard') }}" class="btn btn-success btn-sm rounded-0">Dashboard</a>
            @endguest
        </div>
    </div>
</header>
