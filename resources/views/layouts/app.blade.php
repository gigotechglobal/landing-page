<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GIGOTECH Global Network — EdTech Software &amp; AI Learning Systems, Nigeria')</title>
    <meta name="description"
        content="@yield('description', 'GIGOTECH Global Network builds school management systems, AI-driven exam prep tutors, school websites and simulated science labs for Nigeria\'s education sector.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet">
</head>

<body>

<!-- ================= HEADER ================= -->
    <header id="siteHeader">
        <nav class="wrap">
            <a href="#top" class="brand">
                <div class="brand-mark"><img src="{{ asset('images/logos.png') }}" alt="GIGOTECH Global Network">
                </div>
                <div class="brand-text">
                    <strong>GIGOTECH</strong>
                    <span>GLOBAL NETWORK</span>
                </div>
            </a>
            <div class="nav-links">
                <a href="#products">Solutions</a>
                <a href="#process">How It Works</a>
                <a href="#why">Why Us</a>
                <a href="#testimonials">Stories</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="nav-cta">
                <a href="#contact" class="btn btn-ghost">Sign in</a>
                <a href="#contact" class="btn btn-primary">Book a Demo</a>
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode"
                    title="Toggle theme">🌙</button>
            </div>
            <button class="burger" id="burgerBtn" aria-label="Open menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
        </nav>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-top">
            <div class="brand">
                <div class="brand-mark"><img src="{{ asset('images/logos.png') }}" alt="GIGOTECH Global Network">
                </div>
                <div class="brand-text"><strong>GIGOTECH</strong><span>GLOBAL NETWORK</span></div>
            </div>
            <button class="close-btn" id="closeBtn" aria-label="Close menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
        </div>
        <a href="#products">Solutions</a>
        <a href="#process">How It Works</a>
        <a href="#why">Why Us</a>
        <a href="#testimonials">Stories</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="btn btn-primary">Book a Demo</a>
    </div>

    @yield('content')

    <!-- ================= FOOTER ================= -->
    <footer>
        <div class="wrap">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="brand">
                        <div class="brand-mark"><img src="{{ asset('images/logos.png') }}" alt="GIGOTECH logo">
                        </div>
                        <div class="brand-text"><strong>GIGOTECH</strong><span>GLOBAL NETWORK</span></div>
                    </div>
                    <p>Transforming education through innovative technology — school management systems, AI tutors and
                        simulated science labs, built in Nigeria.</p>
                    <div class="foot-social">
                        <a href="#" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-2.9h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6v1.9H16l-.4 2.9h-2.1v7A10 10 0 0 0 22 12z" />
                            </svg></a>
                        <a href="#" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r="1" />
                            </svg></a>
                        <a href="#" aria-label="LinkedIn"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2 3.76-2 4 0 4.75 2.6 4.75 6V21h-4v-5.3c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9V21H9z" />
                            </svg></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>Solutions</h5>
                    <ul>
                        <li><a href="#products">School Management System</a></li>
                        <li><a href="#products">AI Exam Prep Tutor</a></li>
                        <li><a href="#products">Simulated Science Labs</a></li>
                        <li><a href="#products">School Websites</a></li>
                        <li><a href="#products">EdTech Consulting</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="#why">Why Gigotech</a></li>
                        <li><a href="#process">How it works</a></li>
                        <li><a href="#testimonials">Success stories</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="tel:+2348069678968">+234 806 967 8968</a></li>
                        <li><a href="mailto:contact@gigotechglobal.com.ng">contact@gigotechglobal.com.ng</a></li>
                        <li><a href="https://www.gigotechglobal.com.ng" target="_blank"
                                rel="noopener">www.gigotechglobal.com.ng</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 GIGOTECH Global Network. All rights reserved.</p>
                <div class="legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')

</body>

</html>