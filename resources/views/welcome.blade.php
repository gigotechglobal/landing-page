<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gigotech Global Network</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <div class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-x-0 top-0 h-96 bg-gradient-to-b from-slate-900 via-slate-950 to-transparent opacity-75"></div>
            <header class="relative z-10 border-b border-slate-800 bg-slate-950/95 backdrop-blur-lg">
                <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-4 lg:px-8">
                    <a href="#home" class="flex items-center gap-3 text-white">
                        <img src="{{ asset('images/logoss.jpg') }}" alt="Gigotech Global Logo" class="h-8 w-8 rounded-full object-cover">
                        <span class="text-lg font-semibold tracking-wide">Gigotech Global</span>
                    </a>

                    <nav class="hidden items-center gap-8 text-sm font-medium text-slate-300 lg:flex">
                        <a href="#services" class="transition hover:text-white">Services</a>
                        <a href="#about" class="transition hover:text-white">About</a>
                        <a href="#portfolio" class="transition hover:text-white">Projects</a>
                        <a href="#contact" class="transition hover:text-white">Contact</a>
                    </nav>

                    <button id="navToggle" class="inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-900/90 px-4 py-2 text-sm text-slate-200 lg:hidden">
                        <span>Menu</span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </button>
                </div>
                <div id="navMenu" class="hidden border-t border-slate-800 bg-slate-950/95 px-6 py-4 lg:hidden">
                    <div class="flex flex-col gap-3 text-sm font-medium text-slate-300">
                        <a href="#services" class="transition hover:text-white">Services</a>
                        <a href="#about" class="transition hover:text-white">About</a>
                        <a href="#portfolio" class="transition hover:text-white">Projects</a>
                        <a href="#contact" class="transition hover:text-white">Contact</a>
                    </div>
                </div>
            </header>

            <main id="home" class="relative z-10">
                <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
                    <div class="grid gap-16 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                        <div class="space-y-8">
                            <div class="inline-flex items-center rounded-full bg-indigo-600/10 px-4 py-2 text-sm font-semibold uppercase tracking-[0.24em] text-indigo-300 ring-1 ring-indigo-500/20">
                                Empowering education with modern technology
                            </div>
                            <div class="space-y-6">
                                <h1 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-6xl">
                                    Modern digital learning systems for schools, training providers, and edtech teams.
                                </h1>
                                <p class="max-w-2xl text-lg leading-8 text-slate-300">
                                    Gigotech Global Network delivers immersive learning platforms, curriculum services, and AI-powered solutions that help institutions scale quickly and confidently.
                                </p>
                            </div>
                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-indigo-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">
                                    Request a consultation
                                </a>
                                <a href="#services" class="inline-flex items-center justify-center rounded-full border border-slate-700 bg-slate-900/90 px-6 py-3 text-sm font-semibold text-slate-100 transition hover:border-slate-500 hover:text-white">
                                    Explore services
                                </a>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/80 px-6 py-10 shadow-2xl shadow-slate-950/20 sm:px-8 lg:px-10">
                            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-indigo-500/15 via-transparent to-transparent"></div>
                            <div class="relative space-y-8">
                                <div class="space-y-4">
                                    <div class="inline-flex items-center gap-3 rounded-full bg-slate-800/80 px-4 py-2 text-sm text-slate-300">
                                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                                        Trusted by education leaders and innovators
                                    </div>
                                    <div class="grid gap-3 sm:grid-cols-2">
                                        <div class="rounded-3xl border border-slate-800 bg-slate-950/90 p-6">
                                            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Projects delivered</p>
                                            <p class="mt-4 text-3xl font-semibold text-white">120+</p>
                                        </div>
                                        <div class="rounded-3xl border border-slate-800 bg-slate-950/90 p-6">
                                            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Client satisfaction</p>
                                            <p class="mt-4 text-3xl font-semibold text-white">95%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div class="space-y-3 rounded-3xl bg-slate-950/90 p-6 ring-1 ring-white/5">
                                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Solution</p>
                                        <h2 class="text-xl font-semibold text-white">AI-powered learning platforms</h2>
                                        <p class="text-sm leading-6 text-slate-400">Personalized digital experiences for students, educators, and administrators.</p>
                                    </div>
                                    <div class="space-y-3 rounded-3xl bg-slate-950/90 p-6 ring-1 ring-white/5">
                                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Service</p>
                                        <h2 class="text-xl font-semibold text-white">Strategy & transformation</h2>
                                        <p class="text-sm leading-6 text-slate-400">Roadmaps, integrations, and delivery support for education programs and product launches.</p>
                                    </div>
                                </div>
                                <div class="rounded-[2rem] bg-slate-900/90 p-6 ring-1 ring-slate-700/60">
                                    <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Start here</p>
                                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                                        <div class="rounded-3xl bg-slate-950/95 p-4">
                                            <p class="text-sm text-slate-400">Phone</p>
                                            <p class="mt-2 text-lg font-semibold text-white">+234 806 967 8968</p>
                                        </div>
                                        <div class="rounded-3xl bg-slate-950/95 p-4">
                                            <p class="text-sm text-slate-400">Email</p>
                                            <p class="mt-2 text-lg font-semibold text-white">gospelin.gi@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="services" class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">What we offer</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Education technology services that move learning forward.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-400">From curriculum design to digital systems and immersive student experiences, we help you deliver scalable solutions with measurable outcomes.</p>
                    </div>

                    <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Curriculum</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Curriculum development</h3>
                            <p class="mt-3 text-slate-400">Create learning frameworks, lesson journeys, and digital material that support student success.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Business</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Business & economic education</h3>
                            <p class="mt-3 text-slate-400">Empower learners with practical business, finance, and entrepreneurial skills through modern programs.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">STEM</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Practical STEM education</h3>
                            <p class="mt-3 text-slate-400">Bring hands-on STEM learning to life with labs, simulations, and practical challenges.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Games</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Educational game development</h3>
                            <p class="mt-3 text-slate-400">Design playful learning systems that teach through engagement and reward-based progress.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Setup</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Playground & campus setup</h3>
                            <p class="mt-3 text-slate-400">Create safe, engaging spaces with technology that supports discovery and collaboration.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">AI</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">AI-enabled ecosystems</h3>
                            <p class="mt-3 text-slate-400">Build adaptive learning systems with analytics, personalization, and automation.</p>
                        </article>
                    </div>
                </section>

                <section id="about" class="mx-auto max-w-7xl px-6 pb-16 lg:px-8 lg:pb-24">
                    <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
                        <div class="rounded-[2rem] bg-slate-900/90 p-10 ring-1 ring-slate-700/60">
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-indigo-300">About us</p>
                            <h2 class="mt-6 text-3xl font-semibold text-white sm:text-4xl">We design learning systems that are beautiful, practical, and built to scale.</h2>
                            <p class="mt-6 text-base leading-8 text-slate-400">Gigotech Global Network partners with educators, institutions, and edtech innovators to build software, curriculum services, and digital programs that improve outcomes and reduce friction.</p>
                            <div class="mt-8 space-y-4 text-slate-300">
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-500"></div>
                                    <p class="leading-7">Learner-centered products with strong pedagogy and clean design.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-500"></div>
                                    <p class="leading-7">Strategic execution from discovery to launch and beyond.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-500"></div>
                                    <p class="leading-7">Reliable systems that support learners, teachers, and administrators equally.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="rounded-[2rem] bg-gradient-to-br from-slate-900/95 to-indigo-950/80 p-8 ring-1 ring-slate-700/60">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Mission</p>
                                <h3 class="mt-4 text-xl font-semibold text-white">Advance education through technology.</h3>
                                <p class="mt-3 text-slate-300">We help organizations deliver accessible, scalable learning experiences that work for every learner.</p>
                            </div>
                            <div class="rounded-[2rem] bg-gradient-to-br from-slate-900/95 to-indigo-950/80 p-8 ring-1 ring-slate-700/60">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Vision</p>
                                <h3 class="mt-4 text-xl font-semibold text-white">A future-ready education ecosystem.</h3>
                                <p class="mt-3 text-slate-300">We envision a world where every education provider can access modern tools for meaningful learning.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="portfolio" class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Projects</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Featured work across education and digital learning.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-400">Examples of platforms, apps, and programs created to support modern learners and educators.</p>
                    </div>

                    <div class="mt-12 grid gap-6 lg:grid-cols-3">
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Platform</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Learning management platform</h3>
                                <p class="mt-4 text-slate-400">A scalable system for blended learning, assessments, and learner analytics.</p>
                            </div>
                        </article>
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Mobile</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Student companion app</h3>
                                <p class="mt-4 text-slate-400">A mobile-first experience for learning, collaboration, and progress tracking.</p>
                            </div>
                        </article>
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Interactive</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Gamified learning experience</h3>
                                <p class="mt-4 text-slate-400">A gamified product that teaches STEM and life skills through engaging challenges.</p>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="contact" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
                        <div class="rounded-[2rem] bg-slate-900/90 p-10 ring-1 ring-slate-700/60">
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-indigo-300">Contact</p>
                            <h2 class="mt-6 text-3xl font-semibold text-white sm:text-4xl">Ready to launch your next education initiative?</h2>
                            <p class="mt-6 text-base leading-8 text-slate-400">Tell us about your goals and we’ll recommend the right technology, content, and delivery approach for your audience.</p>
                            <div class="mt-10 space-y-5 text-sm text-slate-300">
                                <div class="rounded-3xl bg-slate-950/95 p-5">
                                    <p class="font-semibold text-white">Phone</p>
                                    <p class="mt-2 text-slate-400">+234 806 967 8968</p>
                                </div>
                                <div class="rounded-3xl bg-slate-950/95 p-5">
                                    <p class="font-semibold text-white">Email</p>
                                    <p class="mt-2 text-slate-400">gospelin.gi@gmail.com</p>
                                </div>
                                <div class="rounded-3xl bg-slate-950/95 p-5">
                                    <p class="font-semibold text-white">Location</p>
                                    <p class="mt-2 text-slate-400">Lagos, Nigeria</p>
                                </div>
                            </div>
                        </div>

                        <form action="#" class="space-y-6 rounded-[2rem] border border-slate-800 bg-slate-900/90 p-10 shadow-2xl shadow-slate-950/10">
                            <div class="grid gap-6 sm:grid-cols-2">
                                <label class="block text-sm font-medium text-slate-200">
                                    Name
                                    <input type="text" placeholder="Your name" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-950/95 px-4 py-3 text-sm text-white outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20" />
                                </label>
                                <label class="block text-sm font-medium text-slate-200">
                                    Email
                                    <input type="email" placeholder="you@example.com" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-950/95 px-4 py-3 text-sm text-white outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20" />
                                </label>
                            </div>

                            <label class="block text-sm font-medium text-slate-200">
                                Project details
                                <textarea rows="5" placeholder="Tell us about your project" class="mt-3 w-full rounded-3xl border border-slate-800 bg-slate-950/95 px-4 py-3 text-sm text-white outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20"></textarea>
                            </label>

                            <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-indigo-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">
                                Send message
                            </button>
                        </form>
                    </div>
                </section>
            </main>
        </div>

        <footer class="border-t border-slate-800 bg-slate-950/90 py-10">
            <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Gigotech Global Network</p>
                    <p class="mt-4 max-w-xl text-sm leading-6 text-slate-400">A technology partner for education organizations seeking modern software, AI-enabled solutions, and digital transformation.</p>
                </div>
                <div class="flex flex-col gap-4 text-sm text-slate-400 sm:flex-row sm:items-center sm:gap-10">
                    <a href="#services" class="transition hover:text-white">Services</a>
                    <a href="#portfolio" class="transition hover:text-white">Projects</a>
                    <a href="#contact" class="transition hover:text-white">Contact</a>
                </div>
            </div>
        </footer>
    </body>
</html>
