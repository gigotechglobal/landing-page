@extends('layouts.app')

@section('title', 'GIGOTECH Global Network — EdTech Software &amp; AI Learning Systems, Nigeria')
@section('description', 'GIGOTECH Global Network builds school management systems, AI-driven exam prep tutors, school websites and simulated science labs for Nigeria\'s education sector.')

@section('content')

    <!-- ================= HERO ================= -->
    <section class="hero" id="top">
        <div class="wrap hero-grid">
            <div>
                <h1>Transforming <em>Education</em> through <em>Innovative</em> Technology.</h1>
                <p class="lead">We builds intelligent education platforms, school management systems, AI-powered tools,
                    immersive simulations, and digital solutions that make learning and teaching.</p>
                <div class="hero-ctas">
                    <a href="#contact" class="btn btn-primary">Book a free demo</a>
                    <a href="#products" class="btn btn-ghost">Explore our solutions →</a>
                </div>
            </div>
            <div class="orbit-wrap" aria-hidden="true">
                <div class="orbit-ring r3"></div>
                <div class="orbit-ring r2"></div>
                <div class="orbit-ring r1"></div>
                <div class="orbit-hub"><img src="{{ asset('images/logos.png') }}" alt="GIGOTECH Global Network"></div>
                <div class="orbit-node n1"><span class="ic"><img src="{{ asset('images/icons/E Learning_48px.png') }}" alt="School OS"></span>School Management System</div>
                <div class="orbit-node n2"><span class="ic"><img src="{{ asset('images/icons/Google Classroom_48px.png') }}" alt="AI-powered Tutor"></span>AI-powered Tutor</div>
                <div class="orbit-node n3"><span class="ic"><img src="{{ asset('images/icons/Microscope_48px.png') }}" alt="Virtual Science Labs"></span>Virtual Science Labs</div>
                <div class="orbit-node n4"><span class="ic"><img src="{{ asset('images/icons/info.png') }}"
                            alt="EdTech Consulting"></span>EdTech Consulting</div>
                <div class="orbit-node n5"><span class="ic"><img src="{{ asset('images/icons/Developer_48px.png') }}" alt="School Websites"></span>School Websites</div>

            </div>
        </div>
    </section>

    <!-- ================= TRUST MARQUEE ================= -->
    <div class="trust">
        <div class="trust-inner">
            <div class="trust-track" id="trustTrack">
                <span>SCHOOL MANAGEMENT SYSTEMS</span>
                <span>AI EXAM PREP TUTORS</span>
                <span>VIRTUAL SCIENCE LABS</span>
                <span>SCHOOL WEBSITES</span>
                <span>EDTECH CONSULTING</span>
                <span>SCHOOL MANAGEMENT SYSTEMS</span>
                <span>AI EXAM PREP TUTORS</span>
                <span>VIRTUAL SCIENCE LABS</span>
                <span>SCHOOL WEBSITES</span>
                <span>EDTECH CONSULTING</span>
            </div>
        </div>
    </div>

    <!-- ================= STATS BAND ================= -->
    <div class="stats-band">
        <div class="wrap stats-grid">
            <div class="stat-item reveal"><strong>40+</strong><span>SCHOOLS &amp; INSTITUTIONS</span></div>
            <div class="stat-item reveal"><strong>18K+</strong><span>STUDENTS SUPPORTED</span></div>
            <div class="stat-item reveal"><strong>92%</strong><span>AVG. RETENTION RATE</span></div>
            <div class="stat-item reveal"><strong>24/7</strong><span>PLATFORM UPTIME SUPPORT</span></div>
        </div>
    </div>

    <!-- ================= PRODUCTS ================= -->
    <section class="products section-pad" id="products">
        <div class="wrap">
            <div class="sec-head reveal">
                <div>
                    <span class="kicker">What we build</span>
                    <h2 class="sec-title">One network, five ways to modernize a school.</h2>
                    <p class="sec-lead">Every product is built by engineers who understand Nigerian school operations
                        first, then layered with the AI and software depth to scale it.</p>
                </div>
            </div>

            <div class="product-grid">
                <div class="product-card flag reveal">
                    <div class="p-icon">🏫</div>
                    <h3>School Management System</h3>
                    <p>A single dashboard for admissions, fees, attendance, timetabling, report cards and staff payroll
                        — built for how Nigerian schools actually run their terms.</p>
                    <div class="p-tags"><span>ADMIN</span><span>FEES &amp; BILLING</span><span>REPORT
                            CARDS</span><span>PARENT PORTAL</span></div>
                </div>

                <div class="product-card reveal">
                    <div class="p-icon">🤖</div>
                    <h3>AI Exam Prep Tutor</h3>
                    <p>A personalized AI tutor that studies each learner's weak spots and builds a WAEC, NECO and
                        JAMB-aligned practice plan around them.</p>
                    <div class="p-tags"><span>ADAPTIVE</span><span>WAEC/JAMB</span></div>
                </div>

                <div class="product-card reveal">
                    <div class="p-icon">🧪</div>
                    <h3>Simulated Science Labs</h3>
                    <p>Game-simulated practicals for Physics, Chemistry and Biology, so students can run experiments
                        safely on any device, lab or no lab.</p>
                    <div class="p-tags"><span>PHYSICS</span><span>CHEMISTRY</span><span>BIOLOGY</span></div>
                </div>

                <div class="product-card reveal">
                    <div class="p-icon">🌐</div>
                    <h3>School Websites</h3>
                    <p>Fast, mobile-ready websites that give schools a professional front door — admissions forms, news,
                        staff pages and portal logins included.</p>
                    <div class="p-tags"><span>ADMISSIONS</span><span>SEO-READY</span></div>
                </div>

                <div class="product-card reveal">
                    <div class="p-icon">📊</div>
                    <h3>EdTech Consulting &amp; Digital Transformation</h3>
                    <p>We help proprietors and school boards plan the move from paper registers to a fully digital
                        campus, step by step, with training included.</p>
                    <div class="p-tags"><span>STRATEGY</span><span>TRAINING</span><span>ROLLOUT</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PROCESS ================= -->
    <section class="process section-pad" id="process">
        <div class="wrap">
            <div class="sec-head reveal">
                <div>
                    <span class="kicker on-dark">How it works</span>
                    <h2 class="sec-title on-dark">From first call to a fully digital campus.</h2>
                </div>
            </div>
            <div class="process-grid">
                <div class="process-step reveal">
                    <div class="process-num">01<span class="ln"></span></div>
                    <h4>Discovery</h4>
                    <p>We spend time understanding your school's size, workflow and biggest pain points before proposing
                        anything.</p>
                </div>
                <div class="process-step reveal">
                    <div class="process-num">02<span class="ln"></span></div>
                    <h4>Build &amp; Configure</h4>
                    <p>We set up or build the right products for you — school system, AI tutor, labs, site — configured
                        to your terms and curriculum.</p>
                </div>
                <div class="process-step reveal">
                    <div class="process-num">03<span class="ln"></span></div>
                    <h4>Train Your Team</h4>
                    <p>Admins, teachers and bursary staff get hands-on training, so the platform is used with confidence
                        from week one.</p>
                </div>
                <div class="process-step reveal">
                    <div class="process-num">04<span class="ln"></span></div>
                    <h4>Support &amp; Improve</h4>
                    <p>We stay on as your tech partner — monitoring uptime, shipping updates and adding features as your
                        school grows.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= WHY US ================= -->
    <section class="why section-pad" id="why">
        <div class="wrap why-grid">
            <div>
                <span class="kicker reveal">Why Gigotech</span>
                <h2 class="sec-title reveal">Built for Nigerian classrooms, engineered like global software.</h2>
                <div class="why-list">
                    <div class="why-item reveal">
                        <div class="wi-icon">🇳🇬</div>
                        <div>
                            <h4>Local context, real curriculum</h4>
                            <p>Our products are mapped to WAEC, NECO and JAMB syllabuses, and priced for the realities
                                of Nigerian schools.</p>
                        </div>
                    </div>
                    <div class="why-item reveal">
                        <div class="wi-icon">⚙️</div>
                        <div>
                            <h4>Full-stack, not a patchwork</h4>
                            <p>One team builds your school system, website and AI tools — so everything talks to
                                everything, from day one.</p>
                        </div>
                    </div>
                    <div class="why-item reveal">
                        <div class="wi-icon">📶</div>
                        <div>
                            <h4>Built for low-bandwidth reality</h4>
                            <p>Lightweight, offline-friendly interfaces designed to work reliably even on unstable
                                connections.</p>
                        </div>
                    </div>
                    <div class="why-item reveal">
                        <div class="wi-icon">🎓</div>
                        <div>
                            <h4>Hands-on onboarding</h4>
                            <p>We don't just hand over a login — we train your staff and stay available for support long
                                after launch.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-panel reveal">
                <span class="quote-mark">"</span>
                <p class="q">Let's shape tomorrow's learning experiences together — one school, one classroom, one
                    student at a time.</p>
                <div class="who">
                    <div class="who-avatar">GG</div>
                    <div><strong>GIGOTECH Global Network</strong><span>Transforming education through innovative
                            technology</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIALS ================= -->
    <section class="testimonials section-pad" id="testimonials">
        <div class="wrap">
            <div class="sec-head reveal">
                <div>
                    <span class="kicker">Stories from the field</span>
                    <h2 class="sec-title">Schools that made the switch.</h2>
                </div>
            </div>
            <div class="test-grid">
                <div class="test-card reveal">
                    <div class="stars">★★★★★</div>
                    <p>Fee collection and report cards used to take our staff days. With Gigotech's system, it's a
                        same-day process now, and parents can see everything from their phones.</p>
                    <div class="test-who">
                        <div class="av">FA</div>
                        <div><strong>Funmilayo A.</strong><span>School Administrator, Lagos</span></div>
                    </div>
                </div>
                <div class="test-card reveal">
                    <div class="stars">★★★★★</div>
                    <p>Our SS3 students used the AI tutor for JAMB prep and their mock scores improved noticeably within
                        one term. It knows exactly where each student is struggling.</p>
                    <div class="test-who">
                        <div class="av">TO</div>
                        <div><strong>Tunde O.</strong><span>Vice Principal, Abuja</span></div>
                    </div>
                </div>
                <div class="test-card reveal">
                    <div class="stars">★★★★★</div>
                    <p>We don't have a fully equipped physics lab, so the simulated practicals have been a real bridge
                        for our students ahead of their exams.</p>
                    <div class="test-who">
                        <div class="av">CE</div>
                        <div><strong>Chiamaka E.</strong><span>Science Coordinator, Port Harcourt</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BAND ================= -->
    <section style="padding:0 0 110px;">
        <div class="cta-band reveal">
            <div>
                <h3>Ready to bring your school into the network?</h3>
                <p>Book a free walkthrough and we'll show you exactly which product fits your school first.</p>
            </div>
            <div class="cta-actions">
                <a href="#contact" class="btn btn-primary">Book a free demo</a>
                <a href="tel:+2348069678968" class="btn btn-ghost">Call +234 806 967 8968</a>
            </div>
        </div>
    </section>

    <!-- ================= CONTACT ================= -->
    <section class="contact section-pad" id="contact">
        <div class="wrap contact-grid">
            <div>
                <span class="kicker reveal">Get in touch</span>
                <h2 class="sec-title reveal">Tell us about your school, we'll take it from there.</h2>
                <p class="sec-lead reveal">Whether you need one product or the full network, our team will map out the
                    right starting point for your school's size and budget.</p>

                <div class="contact-info-list">
                    <div class="contact-info-item reveal">
                        <div class="ci-icon">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div><strong>Phone</strong><a href="tel:+2348069678968">+234 806 967 8968</a></div>
                    </div>
                    <div class="contact-info-item reveal">
                        <div class="ci-icon">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M4 4h16v16H4z" opacity="0" />
                                <path
                                    d="M22 6c0 1.1-.9 2-2 2H4a2 2 0 0 1-2-2m20 0a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2m20 0v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6m20 0-10 7L2 6" />
                            </svg>
                        </div>
                        <div><strong>Email</strong><a
                                href="mailto:contact@gigotechglobal.com.ng">contact@gigotechglobal.com.ng</a></div>
                    </div>
                    <div class="contact-info-item reveal">
                        <div class="ci-icon">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <path
                                    d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                            </svg>
                        </div>
                        <div><strong>Website</strong><a href="https://www.gigotechglobal.com.ng" target="_blank"
                                rel="noopener">www.gigotechglobal.com.ng</a></div>
                    </div>
                    <div class="contact-info-item reveal">
                        <div class="ci-icon">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div><strong>Location</strong><span class="val">Nigeria — serving schools nationwide</span>
                        </div>
                    </div>
                </div>
            </div>

            <form class="contact-form reveal" id="contactForm">
                <div class="form-row">
                    <div class="field"><label for="fname">Full name</label><input id="fname" type="text"
                            placeholder="Your name" required></div>
                    <div class="field"><label for="fschool">School name</label><input id="fschool" type="text"
                            placeholder="Your school"></div>
                </div>
                <div class="form-row">
                    <div class="field"><label for="femail">Email</label><input id="femail" type="email"
                            placeholder="you@school.com" required></div>
                    <div class="field"><label for="fphone">Phone</label><input id="fphone" type="tel"
                            placeholder="+234"></div>
                </div>
                <div class="form-row">
                    <div class="field full">
                        <label for="finterest">I'm interested in</label>
                        <select id="finterest">
                            <option>School Management System</option>
                            <option>AI Exam Prep Tutor</option>
                            <option>Simulated Science Labs</option>
                            <option>School Website</option>
                            <option>EdTech Consulting</option>
                            <option>Not sure yet — advise me</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="field full">
                        <label for="fmsg">Tell us about your school</label>
                        <textarea id="fmsg"
                            placeholder="Number of students, current challenges, timeline..."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Request a free demo</button>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
      <script>
        // Sticky header state
        const header = document.getElementById('siteHeader');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) { header.classList.add('scrolled'); }
            else { header.classList.remove('scrolled'); }
        });

        // Mobile menu
        const burger = document.getElementById('burgerBtn');
        const closeBtn = document.getElementById('closeBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        burger.addEventListener('click', () => mobileMenu.classList.add('open'));
        closeBtn.addEventListener('click', () => mobileMenu.classList.remove('open'));
        mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => mobileMenu.classList.remove('open')));

        // Theme Toggle with system preference
        const themeToggle = document.getElementById('themeToggle');
        const htmlEl = document.documentElement;

        function setTheme(isLight) {
            if (isLight) {
                htmlEl.classList.add('light-mode');
                themeToggle.textContent = '☀️';
                themeToggle.setAttribute('title', 'Switch to dark mode');
            } else {
                htmlEl.classList.remove('light-mode');
                themeToggle.textContent = '🌙';
                themeToggle.setAttribute('title', 'Switch to light mode');
            }
            localStorage.setItem('theme', isLight ? 'light' : 'dark');
        }

        // Initialize theme
        const savedTheme = localStorage.getItem('theme');
        const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;

        if (savedTheme === 'light' || (!savedTheme && prefersLight)) {
            setTheme(true);
        } else {
            setTheme(false);
        }

        // Listen for system changes
        window.matchMedia('(prefers-color-scheme: light)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches);
            }
        });

        themeToggle.addEventListener('click', () => {
            const isCurrentlyLight = htmlEl.classList.contains('light-mode');
            setTheme(!isCurrentlyLight);
        });

        // Reveal on scroll
        const revealEls = document.querySelectorAll('.reveal');
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        revealEls.forEach(el => io.observe(el));

        // Contact form (demo only, no backend)
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const original = btn.textContent;
            btn.textContent = 'Request sent ✓';
            btn.style.background = '#2657D9';
            btn.style.color = '#fff';
            form.reset();
            setTimeout(() => { btn.textContent = original; btn.style.background = ''; btn.style.color = ''; }, 3200);
        });
    </script>
@endpush