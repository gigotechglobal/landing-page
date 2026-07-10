<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIGOTECH Global Network — EdTech Software &amp; AI Learning Systems, Nigeria</title>
    <meta name="description"
        content="GIGOTECH Global Network builds school management systems, AI-driven exam prep tutors, school websites and simulated science labs for Nigeria's education sector.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --navy: #0A1628;
            --navy-2: #0F1E36;
            --navy-3: #152847;
            --blue: #2657D9;
            --blue-light: #5B9DFF;
            --gold: #F5B942;
            --gold-dim: #C98F2A;
            --paper: #F7F9FC;
            --white: #FFFFFF;
            --slate: #4A5568;
            --slate-light: #8593A8;
            --line: rgba(255, 255, 255, 0.10);
            --line-dark: rgba(10, 22, 40, 0.10);
            --radius: 14px;
            --maxw: 1240px;
            --surface-soft: #F8FAFC;
            --surface-strong: #EEF4FF;
            --text-primary: #1F2A44;
            --shadow-soft: 0 18px 45px rgba(10, 22, 40, 0.10);
            --shadow-strong: 0 24px 60px rgba(10, 22, 40, 0.16);
        }

        html.light-mode {
            --navy: #0F172A;
            --navy-2: #14233D;
            --navy-3: #1E3A5F;
            --blue: #2563EB;
            --blue-light: #3B82F6;
            --gold: #E0A21A;
            --gold-dim: #C98716;
            --paper: #F4F7FF;
            --white: #FFFFFF;
            --slate: #475569;
            --slate-light: #64748B;
            --line: rgba(15, 23, 42, 0.08);
            --line-dark: rgba(15, 23, 42, 0.09);
            --surface-soft: #F8FBFF;
            --surface-strong: #EAF3FF;
            --text-primary: #0F172A;
            --shadow-soft: 0 18px 45px rgba(15, 23, 42, 0.08);
            --shadow-strong: 0 24px 60px rgba(15, 23, 42, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--slate);
            background: linear-gradient(180deg, var(--paper) 0%, var(--surface-soft) 100%);
            line-height: 1.6;
            overflow-x: hidden;
            transition: background 0.3s ease, color 0.3s ease;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Sora', sans-serif;
            color: var(--navy);
            letter-spacing: -0.01em;
        }

        html.light-mode h1,
        html.light-mode h2,
        html.light-mode h3,
        html.light-mode h4 {
            color: var(--text-primary);
        }

        .mono {
            font-family: 'JetBrains Mono', monospace;
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 32px;
        }

        section {
            position: relative;
        }

        :focus-visible {
            outline: 3px solid var(--gold);
            outline-offset: 3px;
        }

        /* ---------- BUTTONS ---------- */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 28px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all .25s ease;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--gold);
            color: var(--navy);
        }

        .btn-primary:hover {
            background: #ffc65c;
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(245, 185, 66, 0.35);
        }

        .btn-ghost {
            background: transparent;
            color: var(--white);
            border-color: rgba(255, 255, 255, 0.35);
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.6);
        }

        .btn-dark {
            background: var(--navy);
            color: var(--white);
        }

        .btn-dark:hover {
            background: var(--blue);
            transform: translateY(-2px);
        }

        .btn-outline-navy {
            background: transparent;
            color: var(--navy);
            border-color: rgba(10, 22, 40, 0.25);
        }

        .btn-outline-navy:hover {
            border-color: var(--navy);
            background: rgba(10, 22, 40, 0.04);
        }

        /* ---------- NAV ---------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 18px 0;
            transition: background .35s ease, padding .35s ease, box-shadow .35s ease;
        }

        header.scrolled {
            background: rgba(10, 22, 40, 0.92);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            padding: 12px 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        }

        nav.wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 60px;
            height: 60px;
            border-radius: 11px;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
        }

        .brand-mark img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .brand-text {
            line-height: 1.15;
        }

        .brand-text strong {
            display: block;
            color: var(--white);
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            font-size: 16.5px;
            letter-spacing: 0.01em;
        }

        .brand-text span {
            display: block;
            color: var(--blue-light);
            font-size: 10.5px;
            letter-spacing: 0.16em;
            font-family: 'JetBrains Mono', monospace;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 36px;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.82);
            font-size: 14.5px;
            font-weight: 500;
            position: relative;
            padding: 4px 0;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: width .25s ease;
        }

        .nav-links a:hover {
            color: var(--white);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        /* Theme Toggle */
        .theme-toggle {
            background: none;
            border: 1px solid rgba(255,255,255,0.3);
            color: inherit;
            cursor: pointer;
            padding: 8px;
            border-radius: 999px;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.25s ease;
        }
        html.light-mode .theme-toggle {
            border-color: rgba(15,23,42,0.2);
        }
        .theme-toggle:hover {
            transform: rotate(20deg);
            background: rgba(255,255,255,0.1);
        }
        html.light-mode .theme-toggle:hover {
            background: rgba(15,23,42,0.08);
        }

        .burger {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            color: var(--white);
        }

        .burger svg {
            width: 26px;
            height: 26px;
        }

        .mobile-menu {
            position: fixed;
            inset: 0;
            background: var(--navy);
            z-index: 1200;
            display: flex;
            flex-direction: column;
            padding: 26px 28px;
            transform: translateX(100%);
            transition: transform .35s ease;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .mobile-menu-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
        }

        .mobile-menu a {
            display: block;
            color: var(--white);
            font-family: 'Sora', sans-serif;
            font-size: 26px;
            font-weight: 600;
            padding: 16px 0;
            border-bottom: 1px solid var(--line);
        }

        .mobile-menu .btn {
            margin-top: 32px;
            justify-content: center;
        }

        .close-btn {
            background: none;
            border: none;
            color: var(--white);
            cursor: pointer;
        }

        .close-btn svg {
            width: 28px;
            height: 28px;
        }

        /* ---------- HERO ---------- */
        .hero {
            background: radial-gradient(ellipse 120% 80% at 50% -10%, #14264a 0%, var(--navy) 55%, #060D18 100%);
            padding: 180px 0 120px;
            overflow: hidden;
            position: relative;
        }

        html.light-mode .hero {
            background: linear-gradient(135deg, #dbeafe 0%, #f0f9ff 70%, #e0f2fe 100%);
        }

        html.light-mode .hero h1 {
            color: var(--text-primary);
        }
        html.light-mode .hero p.lead {
            color: var(--slate);
        }
        html.light-mode .hero-stats div strong {
            color: var(--navy);
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
            background-size: 64px 64px;
            mask-image: radial-gradient(ellipse 70% 60% at 50% 20%, black 20%, transparent 75%);
            pointer-events: none;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 40px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            letter-spacing: 0.14em;
            color: var(--gold);
            background: rgba(245, 185, 66, 0.1);
            border: 1px solid rgba(245, 185, 66, 0.3);
            padding: 8px 16px;
            border-radius: 999px;
            margin-bottom: 26px;
            text-transform: uppercase;
        }

        .eyebrow .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--gold);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .35;
            }
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 60px);
            font-weight: 700;
            color: var(--white);
            line-height: 1.08;
            letter-spacing: -0.02em;
            margin-bottom: 24px;
        }

        .hero h1 em {
            font-style: normal;
            color: var(--blue-light);
            background: linear-gradient(180deg, transparent 62%, rgba(91, 157, 255, 0.28) 62%);
        }

        .hero p.lead {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.72);
            max-width: 520px;
            margin-bottom: 38px;
        }

        .hero-ctas {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 56px;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .hero-stats div strong {
            display: block;
            font-family: 'Sora', sans-serif;
            font-size: 26px;
            color: var(--white);
            font-weight: 700;
        }

        .hero-stats div span {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.5);
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 0.02em;
        }

        /* Orbit visual - signature element */
        .orbit-wrap {
            position: relative;
            height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .orbit-ring {
            position: absolute;
            border: 1px dashed rgba(255, 255, 255, 0.16);
            border-radius: 50%;
        }

        .orbit-ring.r1 {
            width: 300px;
            height: 300px;
            animation: spin 34s linear infinite;
        }

        .orbit-ring.r2 {
            width: 440px;
            height: 440px;
            animation: spin 50s linear infinite reverse;
        }

        .orbit-ring.r3 {
            width: 520px;
            height: 520px;
            border-color: rgba(91, 157, 255, 0.14);
            animation: spin 70s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .orbit-hub {
            position: relative;
            z-index: 3;
            width: 132px;
            height: 132px;
            border-radius: 50%;
            background: linear-gradient(155deg, var(--blue) 0%, #133C99 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 0 10px rgba(38, 87, 217, 0.12), 0 0 60px rgba(38, 87, 217, 0.5);
        }

        .orbit-hub img {
            width: 64px;
            height: 64px;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }

        .orbit-node {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(15, 30, 54, 0.9);
            border: 1px solid var(--line);
            padding: 10px 16px 10px 12px;
            border-radius: 999px;
            backdrop-filter: blur(6px);
            font-size: 13px;
            color: var(--white);
            font-weight: 500;
            white-space: nowrap;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .orbit-node .ic {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
        }

        .n1 {
            top: 6%;
            left: 50%;
            transform: translateX(-50%);
        }

        .n1 .ic {
            background: rgba(245, 185, 66, 0.18);
            color: var(--gold);
        }

        .n2 {
            top: 38%;
            right: 0%;
        }

        .n2 .ic {
            background: rgba(91, 157, 255, 0.18);
            color: var(--blue-light);
        }

        .n3 {
            bottom: 10%;
            right: 10%;
        }

        .n3 .ic {
            background: rgba(52, 211, 153, 0.18);
            color: #34D399;
        }

        .n4 {
            bottom: 14%;
            left: 2%;
        }

        .n4 .ic {
            background: rgba(245, 185, 66, 0.18);
            color: var(--gold);
        }

        .n5 {
            top: 40%;
            left: -2%;
        }

        .n5 .ic {
            background: rgba(91, 157, 255, 0.18);
            color: var(--blue-light);
        }

        @media (max-width: 1080px) {
            .orbit-node {
                font-size: 11.5px;
                padding: 8px 12px 8px 8px;
            }

            .orbit-ring.r3 {
                width: 460px;
                height: 460px;
            }

            .orbit-ring.r2 {
                width: 390px;
                height: 390px;
            }

            .orbit-ring.r1 {
                width: 270px;
                height: 270px;
            }
        }

        /* ---------- MARQUEE / TRUST ---------- */
        .trust {
            background: var(--navy-2);
            padding: 0;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .trust-inner {
            display: flex;
            overflow: hidden;
        }

        .trust-track {
            display: flex;
            gap: 0;
            animation: scroll 28s linear infinite;
            flex-shrink: 0;
        }

        .trust-track span {
            font-family: 'JetBrains Mono', monospace;
            color: rgba(255, 255, 255, 0.4);
            font-size: 13.5px;
            padding: 22px 42px;
            white-space: nowrap;
            letter-spacing: 0.04em;
            border-right: 1px solid var(--line);
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ---------- SECTION HEADERS ---------- */
        .section-pad {
            padding: 110px 0;
        }

        .kicker {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12.5px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--blue);
            font-weight: 600;
            margin-bottom: 16px;
            display: block;
        }

        .kicker.on-dark {
            color: var(--gold);
        }

        .sec-title {
            font-size: clamp(28px, 3.6vw, 42px);
            font-weight: 700;
            margin-bottom: 18px;
            max-width: 680px;
        }

        .sec-title.on-dark {
            color: var(--white);
        }

        .sec-lead {
            font-size: 17px;
            color: var(--slate);
            max-width: 600px;
        }

        .sec-lead.on-dark {
            color: rgba(255, 255, 255, 0.65);
        }

        .sec-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 40px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        /* ---------- STATS BAND ---------- */
        .stats-band {
            background: var(--white);
            padding: 70px 0;
            border-bottom: 1px solid var(--line-dark);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
        }

        .stat-item {
            border-left: 2px solid var(--gold);
            padding-left: 20px;
        }

        .stat-item strong {
            display: block;
            font-family: 'Sora', sans-serif;
            font-size: 34px;
            font-weight: 700;
            color: var(--navy);
        }

        .stat-item span {
            font-size: 13.5px;
            color: var(--slate-light);
            font-family: 'JetBrains Mono', monospace;
        }

        /* ---------- PRODUCTS ---------- */
        .products {
            background: var(--paper);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
        }

        .product-card {
            background: var(--white);
            border: 1px solid var(--line-dark);
            border-radius: var(--radius);
            padding: 34px 30px;
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--blue), var(--gold));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .35s ease;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(10, 22, 40, 0.1);
            border-color: transparent;
        }

        .product-card:hover::before {
            transform: scaleX(1);
        }

        .product-card.flag {
            grid-column: span 2;
            background: linear-gradient(155deg, var(--navy) 0%, #12233F 100%);
            border-color: transparent;
        }

        html.light-mode .product-card.flag {
            background: linear-gradient(155deg, #1e40af 0%, #3b82f6 100%);
        }

        .product-card.flag h3,
        .product-card.flag p {
            color: var(--white);
        }

        .product-card.flag p {
            color: rgba(255, 255, 255, 0.65);
        }

        .p-icon {
            width: 52px;
            height: 52px;
            border-radius: 13px;
            background: rgba(38, 87, 217, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 22px;
            font-size: 24px;
        }

        .product-card.flag .p-icon {
            background: rgba(245, 185, 66, 0.15);
        }

        .product-card h3 {
            font-size: 19.5px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .product-card p {
            font-size: 14.5px;
            color: var(--slate);
            margin-bottom: 18px;
        }

        .p-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .p-tags span {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            padding: 5px 10px;
            border-radius: 999px;
            background: rgba(38, 87, 217, 0.07);
            color: var(--blue);
            letter-spacing: 0.02em;
        }

        .product-card.flag .p-tags span {
            background: rgba(255, 255, 255, 0.1);
            color: var(--blue-light);
        }

        @media (max-width:900px) {
            .product-grid {
                grid-template-columns: 1fr 1fr;
            }

            .product-card.flag {
                grid-column: span 2;
            }
        }

        @media (max-width:640px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-card.flag {
                grid-column: span 1;
            }
        }

        /* ---------- PROCESS ---------- */
        .process {
            background: var(--navy);
            position: relative;
            overflow: hidden;
        }

        .process::after {
            content: "";
            position: absolute;
            top: -200px;
            right: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(38, 87, 217, 0.25), transparent 70%);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            position: relative;
            z-index: 2;
        }

        .process-step {
            padding: 0 26px;
            position: relative;
        }

        .process-step:not(:last-child)::after {
            content: "";
            position: absolute;
            top: 26px;
            right: -13px;
            width: 26px;
            height: 1px;
            background: repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.3) 0 6px, transparent 6px 10px);
        }

        .process-num {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: var(--gold);
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .process-num .ln {
            height: 1px;
            flex: 1;
            background: rgba(255, 255, 255, 0.15);
        }

        .process-step h4 {
            color: var(--white);
            font-size: 18px;
            margin-bottom: 10px;
        }

        .process-step p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        @media (max-width:900px) {
            .process-grid {
                grid-template-columns: 1fr 1fr;
                row-gap: 48px;
            }

            .process-step:nth-child(2)::after {
                display: none;
            }

            .process-step:not(:last-child)::after {
                display: none;
            }
        }

        @media (max-width:560px) {
            .process-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ---------- WHY US ---------- */
        .why {
            background: var(--white);
        }

        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: start;
        }

        .why-list {
            display: flex;
            flex-direction: column;
        }

        .why-item {
            display: flex;
            gap: 20px;
            padding: 26px 0;
            border-bottom: 1px solid var(--line-dark);
        }

        .why-item:first-child {
            padding-top: 0;
        }

        .why-item .wi-icon {
            width: 44px;
            height: 44px;
            border-radius: 11px;
            background: rgba(245, 185, 66, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 20px;
        }

        .why-item h4 {
            font-size: 16.5px;
            margin-bottom: 6px;
        }

        .why-item p {
            font-size: 14.5px;
            color: var(--slate);
        }

        .why-panel {
            background: linear-gradient(160deg, var(--navy), #13233F);
            border-radius: 20px;
            padding: 44px 38px;
            color: var(--white);
            position: sticky;
            top: 120px;
        }

        .why-panel .quote-mark {
            font-family: 'Sora', sans-serif;
            font-size: 60px;
            color: var(--gold);
            line-height: 0.5;
            margin-bottom: 20px;
            display: block;
        }

        .why-panel p.q {
            font-size: 19px;
            line-height: 1.55;
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 28px;
            font-family: 'Sora', sans-serif;
            font-weight: 500;
        }

        .why-panel .who {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .who-avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: var(--blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            color: white;
            font-size: 15px;
        }

        .who strong {
            display: block;
            font-size: 14.5px;
            color: var(--white);
        }

        .who span {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.5);
        }

        @media (max-width:880px) {
            .why-grid {
                grid-template-columns: 1fr;
            }

            .why-panel {
                position: static;
            }
        }

        /* ---------- TESTIMONIALS ---------- */
        .testimonials {
            background: var(--paper);
        }

        .test-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .test-card {
            background: var(--white);
            border: 1px solid var(--line-dark);
            border-radius: var(--radius);
            padding: 30px;
        }

        .stars {
            color: var(--gold);
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 16px;
        }

        .test-card p {
            font-size: 14.5px;
            color: var(--slate);
            margin-bottom: 22px;
        }

        .test-who {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .test-who .av {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--navy);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Sora', sans-serif;
            font-size: 13px;
            font-weight: 700;
        }

        .test-who strong {
            display: block;
            font-size: 13.5px;
            color: var(--navy);
        }

        .test-who span {
            font-size: 12px;
            color: var(--slate-light);
        }

        @media (max-width:880px) {
            .test-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ---------- CTA BANNER ---------- */
        .cta-band {
            background: linear-gradient(120deg, var(--blue) 0%, #17337A 100%);
            border-radius: 24px;
            padding: 64px 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
            margin: 0 32px;
            max-width: calc(var(--maxw) - 64px);
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .cta-band::before {
            content: "";
            position: absolute;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            border: 1px dashed rgba(255, 255, 255, 0.25);
            top: -120px;
            right: -80px;
        }

        .cta-band h3 {
            color: var(--white);
            font-size: clamp(24px, 3vw, 32px);
            max-width: 480px;
            position: relative;
            z-index: 2;
        }

        .cta-band p {
            color: rgba(255, 255, 255, 0.75);
            margin-top: 10px;
            font-size: 15px;
            position: relative;
            z-index: 2;
        }

        .cta-actions {
            display: flex;
            gap: 14px;
            position: relative;
            z-index: 2;
            flex-wrap: wrap;
        }

        /* ---------- CONTACT ---------- */
        .contact {
            background: var(--white);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .contact-info-list {
            display: flex;
            flex-direction: column;
            gap: 22px;
            margin-top: 32px;
        }

        .contact-info-item {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .ci-icon {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: rgba(38, 87, 217, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--blue);
        }

        .contact-info-item strong {
            display: block;
            font-size: 13px;
            color: var(--slate-light);
            font-family: 'JetBrains Mono', monospace;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 3px;
        }

        .contact-info-item a,
        .contact-info-item span.val {
            font-size: 15.5px;
            color: var(--navy);
            font-weight: 600;
        }

        form.contact-form {
            background: var(--paper);
            border-radius: 20px;
            padding: 38px;
            border: 1px solid var(--line-dark);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 16px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            font-size: 12.5px;
            font-weight: 600;
            color: var(--navy);
        }

        .field input,
        .field select,
        .field textarea {
            border: 1px solid rgba(10, 22, 40, 0.15);
            border-radius: 10px;
            padding: 12px 14px;
            font-family: 'Inter', sans-serif;
            font-size: 14.5px;
            background: var(--white);
            color: var(--navy);
            transition: border-color .2s ease;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: var(--blue);
            outline: none;
        }

        .field textarea {
            resize: vertical;
            min-height: 100px;
        }

        form.contact-form .btn {
            width: 100%;
            justify-content: center;
            margin-top: 6px;
        }

        @media (max-width:880px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        /* ---------- FOOTER ---------- */
        footer {
            background: var(--navy);
            padding: 70px 0 30px;
            border-top: 1px solid var(--line);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.6fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-brand p {
            color: rgba(255, 255, 255, 0.55);
            font-size: 14px;
            margin-top: 16px;
            max-width: 280px;
        }

        .footer-brand .brand {
            margin-bottom: 0;
        }

        .foot-social {
            display: flex;
            gap: 10px;
            margin-top: 24px;
        }

        .foot-social a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.7);
            transition: all .2s ease;
        }

        .foot-social a:hover {
            background: var(--gold);
            border-color: var(--gold);
            color: var(--navy);
        }

        .footer-col h5 {
            color: var(--white);
            font-family: 'Sora', sans-serif;
            font-size: 14px;
            margin-bottom: 20px;
            letter-spacing: 0.02em;
        }

        .footer-col ul li {
            margin-bottom: 13px;
        }

        .footer-col a {
            color: rgba(255, 255, 255, 0.55);
            font-size: 14px;
            transition: color .2s ease;
        }

        .footer-col a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            border-top: 1px solid var(--line);
            padding-top: 26px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.4);
            font-size: 13px;
        }

        .footer-bottom .legal {
            display: flex;
            gap: 22px;
        }

        .footer-bottom .legal a {
            color: rgba(255, 255, 255, 0.4);
            font-size: 13px;
        }

        .footer-bottom .legal a:hover {
            color: var(--white);
        }

        @media (max-width:880px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width:560px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        html.light-mode .btn-ghost {
            background: rgba(255, 255, 255, 0.78);
            color: var(--navy);
            border-color: rgba(15, 23, 42, 0.16);
        }

        html.light-mode .btn-ghost:hover {
            background: rgba(37, 99, 235, 0.09);
            border-color: rgba(37, 99, 235, 0.24);
            color: var(--blue);
        }

        html.light-mode .btn-primary:hover {
            background: #ffd56f;
            box-shadow: 0 12px 28px rgba(224, 162, 26, 0.26);
        }

        html.light-mode .btn-dark {
            background: linear-gradient(135deg, var(--blue) 0%, #1d4ed8 100%);
            color: var(--white);
        }

        html.light-mode header.scrolled {
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 12px 35px rgba(15, 23, 42, 0.10);
        }

        html.light-mode .brand-text strong {
            color: var(--navy);
        }

        html.light-mode .brand-text span {
            color: var(--blue);
        }

        html.light-mode .nav-links a {
            color: rgba(15, 23, 42, 0.74);
        }

        html.light-mode .nav-links a:hover {
            color: var(--blue);
        }

        html.light-mode .burger,
        html.light-mode .close-btn {
            color: var(--navy);
        }

        html.light-mode .mobile-menu {
            background: linear-gradient(180deg, var(--surface-soft) 0%, var(--white) 100%);
        }

        html.light-mode .mobile-menu a {
            color: var(--navy);
            border-color: rgba(15, 23, 42, 0.08);
        }

        html.light-mode .hero {
            background: radial-gradient(ellipse 120% 80% at 50% -10%, rgba(255, 255, 255, 0.96) 0%, #f1f7ff 45%, #e9f2ff 100%);
        }

        html.light-mode .hero::before {
            background-image: linear-gradient(rgba(37, 99, 235, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(37, 99, 235, 0.05) 1px, transparent 1px);
        }

        html.light-mode .hero h1,
        html.light-mode .hero p.lead,
        html.light-mode .hero-stats div span {
            color: inherit;
        }

        html.light-mode .hero-stats div span {
            color: var(--slate-light);
        }

        html.light-mode .orbit-node {
            background: rgba(255, 255, 255, 0.9);
            color: var(--navy);
            border-color: rgba(15, 23, 42, 0.08);
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
        }

        html.light-mode .orbit-ring {
            border-color: rgba(37, 99, 235, 0.16);
        }

        html.light-mode .orbit-hub {
            box-shadow: 0 0 0 10px rgba(37, 99, 235, 0.12), 0 0 55px rgba(37, 99, 235, 0.22);
        }

        html.light-mode .trust {
            background: linear-gradient(90deg, #eef5ff 0%, #fdf8ee 100%);
            border-color: rgba(15, 23, 42, 0.06);
        }

        html.light-mode .trust-track span {
            color: var(--slate-light);
            border-right-color: rgba(15, 23, 42, 0.06);
        }

        html.light-mode .stats-band {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.95) 0%, rgba(238, 245, 255, 0.96) 100%);
            border-bottom-color: rgba(15, 23, 42, 0.06);
        }

        html.light-mode .product-card,
        html.light-mode .test-card,
        html.light-mode .contact-form {
            background: var(--white);
            border-color: rgba(15, 23, 42, 0.08);
            box-shadow: var(--shadow-soft);
        }

        html.light-mode .product-card:hover,
        html.light-mode .test-card:hover {
            box-shadow: 0 18px 44px rgba(37, 99, 235, 0.12);
            border-color: rgba(37, 99, 235, 0.18);
        }

        html.light-mode .product-card.flag {
            background: linear-gradient(145deg, #1d4ed8 0%, #2563eb 55%, #5b9dff 100%);
        }

        html.light-mode .process {
            background: linear-gradient(135deg, #f6faff 0%, #ebf4ff 100%);
            border-top: 1px solid rgba(15, 23, 42, 0.06);
        }

        html.light-mode .process::after {
            background: radial-gradient(circle, rgba(37, 99, 235, 0.16), transparent 70%);
        }

        html.light-mode .process-step h4 {
            color: var(--navy);
        }

        html.light-mode .process-step p {
            color: var(--slate);
        }

        html.light-mode .process-num {
            color: var(--blue);
        }

        html.light-mode .process-num .ln {
            background: rgba(15, 23, 42, 0.10);
        }

        html.light-mode .why-panel {
            background: linear-gradient(155deg, #1d4ed8 0%, #2563eb 60%, #5b9dff 100%);
            box-shadow: 0 24px 60px rgba(37, 99, 235, 0.18);
        }

        html.light-mode .why-item {
            border-bottom-color: rgba(15, 23, 42, 0.07);
        }

        html.light-mode .cta-band {
            background: linear-gradient(120deg, #2563eb 0%, #1d4ed8 55%, #4f83ff 100%);
            box-shadow: 0 24px 60px rgba(37, 99, 235, 0.18);
        }

        html.light-mode .field input,
        html.light-mode .field select,
        html.light-mode .field textarea {
            background: var(--surface-soft);
            border-color: rgba(15, 23, 42, 0.12);
            color: var(--navy);
        }

        html.light-mode .field input::placeholder,
        html.light-mode .field textarea::placeholder {
            color: var(--slate-light);
        }

        html.light-mode .contact-info-item a,
        html.light-mode .contact-info-item span.val {
            color: var(--navy);
        }

        html.light-mode footer {
            background: linear-gradient(180deg, #0f172a 0%, #0b1324 100%);
        }

        html.light-mode .footer-col a {
            color: rgba(255, 255, 255, 0.72);
        }

        /* ---------- REVEAL ANIMATION ---------- */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ---------- RESPONSIVE MASTER ---------- */
        @media (max-width:1080px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .orbit-wrap {
                height: 420px;
                order: -1;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 36px;
            }

            .why-grid {
                gap: 40px;
            }
        }

        @media (max-width:900px) {
            .nav-links {
                display: none;
            }

            .nav-cta .btn-ghost {
                display: none;
            }

            .burger {
                display: block;
            }

            .cta-band {
                padding: 44px 30px;
                flex-direction: column;
                text-align: center;
            }

            .cta-actions {
                justify-content: center;
            }
        }

        @media (max-width:640px) {
            .wrap {
                padding: 0 20px;
            }

            .hero {
                padding: 150px 0 80px;
            }

            .section-pad {
                padding: 76px 0;
            }

            .hero-stats {
                gap: 26px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .orbit-wrap {
                height: 340px;
            }

            .orbit-node {
                font-size: 10.5px;
                padding: 6px 10px 6px 6px;
            }

            .orbit-node .ic {
                width: 20px;
                height: 20px;
                font-size: 10px;
            }

            .orbit-hub {
                width: 96px;
                height: 96px;
            }

            .orbit-hub img {
                width: 46px;
                height: 46px;
            }
        }
    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header id="siteHeader">
        <nav class="wrap">
            <a href="#top" class="brand">
                <div class="brand-mark"><img src="http://localhost:8000/images/logos.png"
                        alt="GIGOTECH Global Network"></div>
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
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode" title="Toggle theme">🌙</button>
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
                <div class="brand-mark"><img src="http://localhost:8000/images/logos.png"
                        alt="GIGOTECH Global Network"></div>
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

    <!-- ================= HERO ================= -->
    <section class="hero" id="top">
        <div class="wrap hero-grid">
            <div>
                <h1>Software that helps <em>schools run</em> and <em>students learn</em> smarter.</h1>
                <p class="lead">GIGOTECH Global Network designs school management systems, AI-driven exam preparation,
                    immersive science simulations and school websites — engineered to fit how Nigerian schools actually
                    work.</p>
                <div class="hero-ctas">
                    <a href="#contact" class="btn btn-primary">Book a free demo</a>
                    <a href="#products" class="btn btn-ghost">Explore our solutions →</a>
                </div>
                <div class="hero-stats">
                    <div><strong>40+</strong><span>SCHOOLS ONBOARDED</span></div>
                    <div><strong>18,000+</strong><span>STUDENTS REACHED</span></div>
                    <div><strong>5</strong><span>CORE PRODUCTS</span></div>
                </div>
            </div>
            <div class="orbit-wrap" aria-hidden="true">
                <div class="orbit-ring r3"></div>
                <div class="orbit-ring r2"></div>
                <div class="orbit-ring r1"></div>
                <div class="orbit-hub"><img src="http://localhost:8000/images/logos.png" alt="GIGOTECH Global Network">
                </div>
                <div class="orbit-node n1"><span class="ic">🏫</span>School OS</div>
                <div class="orbit-node n2"><span class="ic">🤖</span>AI Tutor</div>
                <div class="orbit-node n3"><span class="ic">🧪</span>Science Labs</div>
                <div class="orbit-node n4"><span class="ic">🌐</span>School Sites</div>
                <div class="orbit-node n5"><span class="ic">📊</span>Consulting</div>
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

    <!-- ================= FOOTER ================= -->
    <footer>
        <div class="wrap">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="brand">
                        <div class="brand-mark"><img src="http://localhost:8000/images/logos.png" alt="GIGOTECH logo"></div>
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
                                rel="noopener">www.gigotechglobal.ng</a></li>
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
</body>

</html>