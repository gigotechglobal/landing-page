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
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-600/20 text-xl font-semibold text-indigo-300">GG</span>
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
                                Modern EdTech + Software Solutions
                            </div>
                            <div class="space-y-6">
                                <h1 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-6xl">
                                    Build digital learning experiences for tomorrow’s global learners.
                                </h1>
                                <p class="max-w-2xl text-lg leading-8 text-slate-300">
                                    Gigotech Global Network delivers intelligent education platforms, web and mobile development, and digital transformation services designed for learning organizations, enterprises, and innovators.
                                </p>
                            </div>
                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-indigo-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">
                                    Start a project
                                </a>
                                <a href="#portfolio" class="inline-flex items-center justify-center rounded-full border border-slate-700 bg-slate-900/90 px-6 py-3 text-sm font-semibold text-slate-100 transition hover:border-slate-500 hover:text-white">
                                    View portfolio
                                </a>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/80 px-6 py-10 shadow-2xl shadow-slate-950/20 sm:px-8 lg:px-10">
                            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-indigo-500/15 via-transparent to-transparent"></div>
                            <div class="relative space-y-8">
                                <div class="space-y-4">
                                    <div class="inline-flex items-center gap-3 rounded-full bg-slate-800/80 px-4 py-2 text-sm text-slate-300">
                                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                                        Trusted by education leaders and startups worldwide
                                    </div>
                                    <div class="grid gap-3 sm:grid-cols-2">
                                        <div class="rounded-3xl border border-slate-800 bg-slate-950/90 p-6">
                                            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Projects Delivered</p>
                                            <p class="mt-4 text-3xl font-semibold text-white">120+</p>
                                        </div>
                                        <div class="rounded-3xl border border-slate-800 bg-slate-950/90 p-6">
                                            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Average speed</p>
                                            <p class="mt-4 text-3xl font-semibold text-white">24 weeks</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div class="space-y-3 rounded-3xl bg-slate-950/90 p-6 ring-1 ring-white/5">
                                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Insight</p>
                                        <h2 class="text-xl font-semibold text-white">AI-Powered learning platforms</h2>
                                        <p class="text-sm leading-6 text-slate-400">Personalized adaptive experiences built for modern classrooms and remote learners.</p>
                                    </div>
                                    <div class="space-y-3 rounded-3xl bg-slate-950/90 p-6 ring-1 ring-white/5">
                                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Impact</p>
                                        <h2 class="text-xl font-semibold text-white">Digital transformation consulting</h2>
                                        <p class="text-sm leading-6 text-slate-400">Roadmaps, platforms, and training systems that modernize learning operations.</p>
                                    </div>
                                </div>
                                <div class="rounded-[2rem] bg-slate-900/90 p-6 ring-1 ring-slate-700/60">
                                    <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Contact</p>
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
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">What we do</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Services built for ambitious education and technology teams.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-400">From custom software to AI-enabled learning systems, we help brands create engaging digital experiences for users across the globe.</p>
                    </div>

                    <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Custom educational applications</h3>
                            <p class="mt-3 text-slate-400">Design and build scalable platforms that support interactive learning, assessments, and student management.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Mobile & web development</h3>
                            <p class="mt-3 text-slate-400">Launch polished web apps and mobile experiences that deliver consistent performance across devices.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">AI-powered learning platforms</h3>
                            <p class="mt-3 text-slate-400">Use generative AI and analytics to personalize learning journeys and improve engagement.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Full-stack software engineering</h3>
                            <p class="mt-3 text-slate-400">Deliver end-to-end product development with rigorous QA, reliable deployment, and ongoing support.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">EdTech consulting & digital transformation</h3>
                            <p class="mt-3 text-slate-400">Create roadmaps and strategies that help institutions transition to modern digital education systems.</p>
                        </article>
                        <article class="rounded-3xl border border-slate-800 bg-slate-900/90 p-8 shadow-xl shadow-slate-950/10">
                            <span class="inline-flex rounded-full bg-indigo-600/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-indigo-200">Service</span>
                            <h3 class="mt-6 text-xl font-semibold text-white">Platform integration & automation</h3>
                            <p class="mt-3 text-slate-400">Connect tools, learning management systems, and analytics pipelines for smoother operations.</p>
                        </article>
                    </div>
                </section>

                <section id="about" class="mx-auto max-w-7xl px-6 pb-16 lg:px-8 lg:pb-24">
                    <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
                        <div class="rounded-[2rem] bg-slate-900/90 p-10 ring-1 ring-slate-700/60">
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-indigo-300">About Gigotech</p>
                            <h2 class="mt-6 text-3xl font-semibold text-white sm:text-4xl">We partner with education and technology teams to build meaningful digital experiences.</h2>
                            <p class="mt-6 text-base leading-8 text-slate-400">Gigotech Global Network combines design thinking, engineering excellence, and education expertise to deliver solutions that scale. Our approach balances clarity, creativity, and measurable results so your product is intuitive, secure, and future-ready.</p>
                            <div class="mt-8 space-y-4 text-slate-300">
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-400"></div>
                                    <p class="leading-7">End-to-end product strategy, UX, and development for education platforms.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-400"></div>
                                    <p class="leading-7">Secure cloud architecture, APIs, analytics, and automation across learning ecosystems.</p>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="mt-1 h-3 w-3 rounded-full bg-indigo-400"></div>
                                    <p class="leading-7">AI integration that supports adaptive learning, insights, and personalization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="rounded-[2rem] bg-slate-900/90 p-8 ring-1 ring-slate-700/60">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Mission</p>
                                <h3 class="mt-4 text-xl font-semibold text-white">Transform education through innovation.</h3>
                                <p class="mt-3 text-slate-400">We help organizations deliver modern learning experiences that are easy to adopt and simple to scale.</p>
                            </div>
                            <div class="rounded-[2rem] bg-slate-900/90 p-8 ring-1 ring-slate-700/60">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Vision</p>
                                <h3 class="mt-4 text-xl font-semibold text-white">Global learning powered by technology.</h3>
                                <p class="mt-3 text-slate-400">Our products are built to empower educators, learners, and administrators everywhere.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="portfolio" class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Portfolio</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Selected projects that showcase our technical craftsmanship.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-400">A mix of learning ecosystems, mobile-first software, and enterprise-grade platforms delivered with precision and polish.</p>
                    </div>

                    <div class="mt-12 grid gap-6 lg:grid-cols-3">
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">edtech platform</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Campus learning hub</h3>
                                <p class="mt-4 text-slate-400">A blended learning system with analytics dashboards, course workflows, and adaptive modules.</p>
                            </div>
                        </article>
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">mobile app</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Learning companion app</h3>
                                <p class="mt-4 text-slate-400">A mobile experience that delivers microlearning, notifications, and progress tracking.</p>
                            </div>
                        </article>
                        <article class="group overflow-hidden rounded-[2rem] border border-slate-800 bg-slate-900/90 transition hover:-translate-y-1 hover:border-indigo-500/40 hover:shadow-xl">
                            <div class="p-8">
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-500">analytics engine</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">Insights and automation</h3>
                                <p class="mt-4 text-slate-400">An analytics platform built to measure engagement, outcomes, and operational efficiency.</p>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="contact" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                        <div class="rounded-[2rem] bg-slate-900/90 p-10 ring-1 ring-slate-700/60">
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-indigo-300">Get in touch</p>
                            <h2 class="mt-6 text-3xl font-semibold text-white sm:text-4xl">Let’s shape your next digital learning experience.</h2>
                            <p class="mt-6 text-base leading-8 text-slate-400">Whether you need a full platform, an app, or a technology strategy, we’ll help you define the right solution for your team.</p>
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
                                    <p class="font-semibold text-white">Website</p>
                                    <p class="mt-2 text-slate-400">www.gigotechglobal.ng</p>
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
                                Message
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
                    <p class="mt-4 max-w-xl text-sm leading-6 text-slate-400">A technology partner for education organizations seeking modern, scalable software and AI-enabled learning solutions.</p>
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
