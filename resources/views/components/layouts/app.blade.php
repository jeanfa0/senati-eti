<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SENATI ETI — Escuela de Tecnologías de la Información' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary: #002F6C;
            --primary-light: #0056C6;
            --secondary: #00B386;
            --secondary-light: #00FFC4;
            --white: #FFFFFF;
            --text: #FFFFFF;
            --text-soft: #C7D2FE;
            --bg: #01060f;
            --border: rgba(255, 255, 255, 0.12);
            --radius: 24px;
            --shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            --transition: .4s cubic-bezier(.4, 0, .2, 1);
            
            /* Legacy / specific mappings to match all sheets perfectly */
            --azul-oscuro: #002F6C;
            --azul-profundo: #01060f;
            --azul-brand: #002F6C;
            --azul-glow: rgba(0, 86, 198, 0.4);
            --verde: #00B386;
            --verde-acento: #00FFC4;
            --verde-glow: rgba(0, 255, 196, 0.22);
            --blanco: #FFFFFF;
            --fondo-gris: #01060f;
            --texto-principal: #FFFFFF;
            --texto-secundario: #C7D2FE;
            --borde: rgba(255, 255, 255, 0.12);
            --font-display: 'Outfit', sans-serif;
            --font-sans: 'Inter', sans-serif;
        }

        body {
            font-family: var(--font-sans);
            color: var(--texto-principal);
            background: var(--azul-profundo);
            overflow-x: hidden;
            position: relative;
        }

        /* ── EFECTO DE AURORAS BOREALES ANIMADAS PREMIUM ── */
        body::before, body::after {
            content: "";
            position: absolute;
            width: 800px;
            height: 800px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 255, 196, 0.12) 0%, rgba(0, 86, 198, 0.08) 50%, transparent 100%);
            filter: blur(130px);
            z-index: -2;
            pointer-events: none;
            animation: aurora-move-1 25s infinite alternate ease-in-out;
        }

        body::before {
            top: -200px;
            left: -100px;
        }

        body::after {
            top: 35%;
            right: -200px;
            background: radial-gradient(circle, rgba(0, 255, 196, 0.1) 0%, rgba(139, 92, 246, 0.08) 60%, transparent 100%);
            animation: aurora-move-2 30s infinite alternate ease-in-out;
        }

        @keyframes aurora-move-1 {
            0% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(150px, 80px) scale(1.15) rotate(180deg); }
            100% { transform: translate(-80px, 200px) scale(0.9) rotate(360deg); }
        }

        @keyframes aurora-move-2 {
            0% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(-150px, -80px) scale(1.2) rotate(-180deg); }
            100% { transform: translate(100px, 150px) scale(0.85) rotate(-360deg); }
        }

        /* ── UTILIDADES GLOBALES Y CONTENEDORES CON MESH TECNOLÓGICO ── */
        .container, .section-container {
            position: relative;
            max-width: 1312px;
            margin: 0 auto;
            padding: 40px 64px;
            border-radius: 24px;
            overflow: hidden;
            
            /* Imagen de fondo / Mesh Tecnológico de alta fidelidad */
            background-image: 
                radial-gradient(rgba(0, 245, 180, 0.05) 1.5px, transparent 1.5px),
                linear-gradient(to right, rgba(0, 47, 108, 0.2) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 47, 108, 0.2) 1px, transparent 1px);
            background-size: 40px 40px, 40px 40px, 40px 40px;
            background-position: center center;
            border: 1px solid rgba(0, 47, 108, 0.25);
            background-color: rgba(2, 8, 19, 0.6);
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .section-label {
            display: inline-block;
            font-family: var(--font-display);
            font-size: 13px;
            font-weight: 700;
            color: var(--verde-acento);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 16px;
            background: rgba(0, 245, 180, 0.08);
            padding: 6px 16px;
            border-radius: 99px;
            border: 1px solid rgba(0, 245, 180, 0.15);
        }

        .section-title {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 800;
            color: var(--blanco);
            margin-bottom: 16px;
            line-height: 1.15;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #FFFFFF 50%, #A5C2EB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-sub {
            font-size: 17px;
            color: var(--texto-secundario);
            line-height: 1.7;
            max-width: 720px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 56px;
        }

        /* ── BOTONES PREMIUM ── */
        .btn-primary {
            background: linear-gradient(135deg, var(--verde), #00d39e);
            color: #020813;
            padding: 14px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
            box-shadow: 0 10px 20px rgba(0, 179, 134, 0.2);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 245, 180, 0.3);
            background: linear-gradient(135deg, #00d39e, var(--verde-acento));
        }

        .btn-outline {
            border: 1.5px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 14px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            display: inline-block;
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(4px);
        }

        .btn-outline:hover {
            border-color: var(--verde-acento);
            background: rgba(0, 245, 180, 0.05);
            color: var(--verde-acento);
            transform: translateY(-2px);
        }

        .btn-outline-dark {
            border: 1.5px solid rgba(255, 255, 255, 0.15);
            color: var(--texto-secundario);
            padding: 14px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            white-space: nowrap;
            display: inline-block;
            background: rgba(255,255,255,0.02);
        }

        .btn-outline-dark:hover {
            border-color: rgba(255,255,255,0.4);
            color: white;
            background: rgba(255,255,255,0.05);
        }

        /* ── BREADCRUMB PREMIUM ── */
        .breadcrumb {
            background: rgba(0, 47, 108, 0.15);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 16px 0;
            backdrop-filter: blur(8px);
        }
        .breadcrumb-container {
            max-width: 1312px;
            margin: 0 auto;
            padding: 0 64px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: var(--texto-secundario);
        }
        .breadcrumb a {
            color: var(--texto-secundario);
            text-decoration: none;
            transition: color 0.2s;
        }
        .breadcrumb a:hover {
            color: var(--verde-acento);
        }
        .breadcrumb span:last-child {
            color: var(--blanco);
            font-weight: 600;
        }

        /* ── CARRERA CARDS PREMIUM ── */
        .carreras-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
        .carrera-card {
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 20px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(16px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: block;
        }
        .carrera-card:hover {
            transform: translateY(-8px);
            border-color: rgba(0, 245, 180, 0.25);
            box-shadow: 0 20px 40px rgba(0, 245, 180, 0.1);
            background: rgba(255, 255, 255, 0.04);
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            .carreras-grid { grid-template-columns: repeat(2, 1fr); }
            .section-container { padding: 0 32px; }
            .breadcrumb-container { padding: 0 32px; }
        }

        @media (max-width: 768px) {
            .navbar { padding: 0 20px; }
            .navbar-links { display: none; }
            .navbar-cta-desktop { display: none; }
            .navbar-hamburger { display: flex; }
            .footer { padding: 40px 20px; flex-direction: column; height: auto; gap: 24px; text-align: center; }
            .footer-contacts { flex-wrap: wrap; justify-content: center; }
            .section-container { padding: 0 20px; }
            .breadcrumb-container { padding: 0 20px; }
            .carreras-grid { grid-template-columns: 1fr; }
        }
        
        .navbar-links.navbar-open {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            background: #020813;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 24px;
            gap: 20px;
            z-index: 99;
        }
    </style>
</head>
<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
    
    <!-- GSAP & ScrollTrigger CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    
    <script>
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        const hamburger = document.querySelector('.navbar-hamburger');
        const navLinks = document.querySelector('.navbar-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('navbar-open');
        });
    </script>
</body>
</html>