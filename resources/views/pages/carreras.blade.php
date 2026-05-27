<x-layouts.app title="Carreras — SENATI ETI">

    {{-- HERO PREMIUM --}}
    <section class="carreras-hero">
        <div class="hero-blur hero-blur-1"></div>
        <div class="hero-blur hero-blur-2"></div>

        <div class="carreras-hero-container">

            <div class="carreras-hero-left">

                <span class="hero-pill">
                    🚀 Escuela de Tecnologías de la Información
                </span>

                <h1 class="carreras-hero-title">
                    Construye tu futuro <br>
                    en el mundo de la
                    <span>Tecnología</span>
                </h1>

                <p class="carreras-hero-sub">
                    Fórmate con una metodología 100% práctica, laboratorios modernos
                    y tecnologías usadas por las empresas más importantes del país.
                    Obtén tu título profesional técnico a nombre de la Nación.
                </p>

                <div class="hero-buttons">
                    <a href="/admision" class="btn-hero-primary">
                        Postular ahora
                    </a>

                    <a href="#carreras" class="btn-hero-secondary">
                        Explorar carreras →
                    </a>
                </div>

                <div class="hero-mini-stats">

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="10">0</strong>
                        <span>Carreras TI</span>
                    </div>

                    <div class="mini-stat-divider"></div>

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="3750" data-prefix="+" data-format="comma">0</strong>
                        <span>Horas prácticas</span>
                    </div>

                    <div class="mini-stat-divider"></div>

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="6">0</strong>
                        <span>Semestres</span>
                    </div>

                </div>

            </div>

            <div class="carreras-hero-right">

                <div class="hero-glass-card card-main">
                    <div class="glass-badge">TOP CARRERAS</div>

                    <div class="glass-item">
                        <span>💻</span>
                        <div>
                            <strong>Desarrollo de Software</strong>
                            <small>Full Stack & Cloud</small>
                        </div>
                    </div>

                    <div class="glass-item">
                        <span>🛡️</span>
                        <div>
                            <strong>Ciberseguridad</strong>
                            <small>Ethical Hacking & SOC</small>
                        </div>
                    </div>

                    <div class="glass-item">
                        <span>🤖</span>
                        <div>
                            <strong>Software con IA</strong>
                            <small>Machine Learning & AI</small>
                        </div>
                    </div>

                </div>

                <div class="floating-box float-1">
                    ⚡ Alta demanda laboral
                </div>

                <div class="floating-box float-2">
                    🎓 Título oficial
                </div>

            </div>

        </div>

        <div class="hero-partners">
            @foreach (['Microsoft', 'Cisco', 'IBM', 'Oracle', 'Adobe', 'SAP'] as $partner)
                <span>{{ $partner }}</span>
            @endforeach
        </div>
    </section>

    {{-- BREADCRUMB --}}
    <div class="breadcrumb">
        <div class="breadcrumb-container">
            <a href="/">Inicio</a>
            <span>›</span>
            <span>Carreras</span>
        </div>
    </div>

    {{-- SECTION CARRERAS --}}
    <section class="carreras-page-section" id="carreras">

        <div class="section-container">

            <div class="section-top">

                <div>
                    <span class="section-label">
                        CATÁLOGO COMPLETO
                    </span>

                    <h2 class="section-title">
                        Elige la carrera ideal para ti
                    </h2>

                    <p class="section-subtitle">
                        Descubre nuestras carreras diseñadas para las necesidades
                        reales del mercado tecnológico actual.
                    </p>
                </div>

                <div class="section-counter">
                    <strong class="stat-number" data-target="{{ count($carreras) }}">0</strong>
                    <span>Carreras disponibles</span>
                </div>

            </div>

            {{-- GRID --}}
            <div class="carreras-grid">

                @foreach ($carreras as $carrera)

                    <div class="career-wrapper">
                        <x-carrera-card :carrera="$carrera" />
                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- BENEFICIOS --}}
    <section class="beneficios-section">

        <div class="section-container">

            <div class="beneficios-header">
                <span class="section-label">¿POR QUÉ SENATI ETI?</span>

                <h2 class="section-title">
                    Aprende con tecnología real
                </h2>
            </div>

            <div class="beneficios-grid">

                @foreach ([
                    [
                        'icon' => '🏢',
                        'title' => 'Convenios empresariales',
                        'desc' => 'Aprende con herramientas y metodologías utilizadas en empresas reales.'
                    ],
                    [
                        'icon' => '🧠',
                        'title' => 'Aprendizaje práctico',
                        'desc' => 'Más del 70% del tiempo enfocado en laboratorios y proyectos.'
                    ],
                    [
                        'icon' => '🌎',
                        'title' => 'Tecnologías globales',
                        'desc' => 'Trabaja con plataformas líderes como Azure, Cisco y Oracle.'
                    ],
                    [
                        'icon' => '📈',
                        'title' => 'Alta empleabilidad',
                        'desc' => 'Conexión con empresas y oportunidades laborales reales.'
                    ],
                ] as $beneficio)

                    <div class="beneficio-card">

                        <div class="beneficio-icon">
                            {{ $beneficio['icon'] }}
                        </div>

                        <h3>
                            {{ $beneficio['title'] }}
                        </h3>

                        <p>
                            {{ $beneficio['desc'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- CTA PREMIUM --}}
    <section class="premium-cta">

        <div class="section-container">

            <div class="premium-cta-box">

                <div class="premium-cta-content">

                    <span class="cta-pill">
                        Convocatoria abierta 2026
                    </span>

                    <h2>
                        Empieza hoy tu carrera profesional en tecnología
                    </h2>

                    <p>
                        Forma parte de SENATI ETI y conviértete en un profesional
                        altamente competitivo para el mercado digital.
                    </p>

                </div>

                <div class="premium-cta-buttons">

                    <a href="/admision" class="cta-primary">
                        Postular ahora
                    </a>

                    <a href="/contacto" class="cta-secondary">
                        Solicitar información
                    </a>

                </div>

            </div>

        </div>

    </section>

    <style>

        :root{
            --hero-bg: var(--azul-oscuro);
            --hero-bg-2: var(--primary-light);
            --verde: var(--secondary);
            --verde-hover: var(--verde-acento);
            --texto: var(--white);
            --texto-soft: var(--texto-secundario);
            --borde: var(--borde);
            --white: var(--white);
            --gris: var(--azul-profundo);
        }

        *{
            box-sizing:border-box;
        }

        /* HERO */

        .carreras-hero{
            position:relative;
            overflow:hidden;
            background: 
                radial-gradient(circle at top left, rgba(0, 255, 196, 0.15) 0%, transparent 40%),
                radial-gradient(circle at bottom right, rgba(0, 86, 198, 0.2) 0%, transparent 40%),
                linear-gradient(135deg, #01060f 0%, #002F6C 50%, #020813 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding:90px 0 0;
        }

        .hero-blur{
            position:absolute;
            border-radius:50%;
            filter:blur(80px);
            opacity:.25;
            pointer-events:none;
        }

        .hero-blur-1{
            width:280px;
            height:280px;
            background:#00C896;
            top:-100px;
            left:-100px;
        }

        .hero-blur-2{
            width:260px;
            height:260px;
            background:#2563EB;
            bottom:-100px;
            right:-100px;
        }

        .carreras-hero-container{
            max-width:1320px;
            margin:auto;
            padding:0 64px 80px;
            display:grid;
            grid-template-columns:1.2fr .8fr;
            gap:60px;
            align-items:center;
            position:relative;
            z-index:2;
        }

        .hero-pill{
            display:inline-flex;
            align-items:center;
            gap:8px;
            border:1px solid rgba(255,255,255,.15);
            background:rgba(255,255,255,.06);
            backdrop-filter:blur(10px);
            color:#D1FAE5;
            padding:10px 18px;
            border-radius:999px;
            font-size:13px;
            font-weight:600;
            margin-bottom:26px;
        }

        .carreras-hero-title{
            font-size:64px;
            line-height:1.05;
            color:white;
            font-weight:800;
            margin-bottom:24px;
            letter-spacing:-2px;
        }

        .carreras-hero-title span{
            background:linear-gradient(90deg,#00C896,#7CFFDA);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .carreras-hero-sub{
            max-width:640px;
            font-size:17px;
            line-height:1.8;
            color:rgba(255,255,255,.72);
            margin-bottom:36px;
        }

        .hero-buttons{
            display:flex;
            gap:16px;
            flex-wrap:wrap;
            margin-bottom:42px;
        }

        .btn-hero-primary,
        .btn-hero-secondary{
            text-decoration:none;
            padding:16px 28px;
            border-radius:14px;
            font-weight:700;
            transition:.25s ease;
        }

        .btn-hero-primary{
            background:var(--verde);
            color:white;
            box-shadow:0 10px 30px rgba(0,200,150,.35);
        }

        .btn-hero-primary:hover{
            transform:translateY(-3px);
            background:var(--verde-hover);
        }

        .btn-hero-secondary{
            border:1px solid rgba(255,255,255,.15);
            background:rgba(255,255,255,.06);
            color:white;
            backdrop-filter:blur(10px);
        }

        .btn-hero-secondary:hover{
            background:rgba(255,255,255,.12);
        }

        .hero-mini-stats{
            display:flex;
            align-items:center;
            gap:22px;
            flex-wrap:wrap;
        }

        .mini-stat{
            display:flex;
            flex-direction:column;
            gap:4px;
        }

        .mini-stat strong{
            color:white;
            font-size:28px;
            font-weight:800;
        }

        .mini-stat span{
            font-size:13px;
            color:rgba(255,255,255,.55);
        }

        .mini-stat-divider{
            width:1px;
            height:42px;
            background:rgba(255,255,255,.12);
        }

        /* RIGHT */

        .carreras-hero-right{
            position:relative;
            min-height:420px;
        }

        .hero-glass-card{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.12);
            backdrop-filter:blur(18px);
            border-radius:28px;
            padding:30px;
            box-shadow:0 20px 60px rgba(0,0,0,.25);
        }

        .card-main{
            position:absolute;
            top:40px;
            right:40px;
            width:320px;
        }

        .glass-badge{
            display:inline-block;
            background:rgba(0,200,150,.15);
            color:#A7F3D0;
            border:1px solid rgba(255,255,255,.08);
            padding:8px 14px;
            border-radius:999px;
            font-size:12px;
            font-weight:700;
            margin-bottom:24px;
        }

        .glass-item{
            display:flex;
            align-items:center;
            gap:16px;
            padding:16px 0;
            border-bottom:1px solid rgba(255,255,255,.08);
        }

        .glass-item:last-child{
            border:none;
            padding-bottom:0;
        }

        .glass-item span{
            font-size:30px;
        }

        .glass-item strong{
            display:block;
            color:white;
            font-size:15px;
            margin-bottom:4px;
        }

        .glass-item small{
            color:rgba(255,255,255,.55);
            font-size:12px;
        }

        .floating-box{
            position:absolute;
            background:rgba(2, 8, 19, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding:14px 20px;
            border-radius:14px;
            box-shadow:0 10px 35px rgba(0,0,0,.3);
            font-size:13px;
            font-weight:700;
            color:var(--verde-acento);
        }

        .float-1{
            top:0;
            left:0;
        }

        .float-2{
            bottom:20px;
            left:40px;
        }

        .hero-partners{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            gap:50px;
            padding:22px 40px;
            border-top:1px solid rgba(255,255,255,.08);
            background:rgba(0,0,0,.15);
        }

        .hero-partners span{
            color:rgba(255,255,255,.45);
            font-weight:700;
            letter-spacing:1px;
            font-size:13px;
            text-transform:uppercase;
        }

        /* BREAD */

        .breadcrumb{
            background: rgba(0, 47, 108, 0.15);
            border-bottom:1px solid var(--borde);
        }

        .breadcrumb-container{
            max-width:1320px;
            margin:auto;
            padding:16px 64px;
            display:flex;
            align-items:center;
            gap:10px;
            font-size:14px;
        }

        .breadcrumb a{
            color:var(--texto-soft);
            text-decoration:none;
        }

        .breadcrumb span{
            color:#94A3B8;
        }

        /* SECTION */

        .carreras-page-section{
            padding:90px 0;
            background:var(--azul-profundo);
        }

        .section-container{
            max-width:1320px;
            margin:auto;
            padding:0 64px;
        }

        .section-top{
            display:flex;
            justify-content:space-between;
            align-items:end;
            gap:24px;
            margin-bottom:54px;
        }

        .section-label{
            display:inline-block;
            color:var(--verde-acento);
            font-size:13px;
            font-weight:800;
            letter-spacing:1px;
            margin-bottom:14px;
        }

        .section-title{
            font-size:46px;
            line-height:1.1;
            color:var(--white);
            margin-bottom:12px;
            font-weight:800;
        }

        .section-subtitle{
            color:var(--texto-soft);
            font-size:16px;
            line-height:1.7;
            max-width:640px;
        }

        .section-counter{
            min-width:180px;
            background:rgba(255,255,255,0.02);
            border:1px solid var(--borde);
            border-radius:22px;
            padding:22px;
            text-align:center;
        }

        .section-counter strong{
            display:block;
            font-size:36px;
            color:var(--verde-acento);
            margin-bottom:4px;
        }

        .section-counter span{
            color:var(--texto-soft);
            font-size:13px;
        }

        /* GRID */

        .carreras-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(290px,1fr));
            gap:28px;
        }

        .career-wrapper{
            transition:.3s ease;
        }

        .career-wrapper:hover{
            transform:translateY(-6px);
        }

        /* BENEFICIOS */

        .beneficios-section{
            background:var(--azul-profundo);
            padding:90px 0;
            border-top: 1px solid var(--borde);
        }

        .beneficios-header{
            text-align:center;
            margin-bottom:60px;
        }

        .beneficios-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:24px;
        }

        .beneficio-card{
            background:rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border:1px solid var(--borde);
            border-radius:24px;
            padding:34px;
            transition:.3s ease;
        }

        .beneficio-card:hover{
            transform:translateY(-6px);
            box-shadow:0 20px 40px rgba(0, 245, 180, 0.05);
            border-color: rgba(0, 245, 180, 0.2);
        }

        .beneficio-icon{
            width:68px;
            height:68px;
            border-radius:18px;
            background:linear-gradient(135deg,var(--azul-oscuro),var(--verde-acento));
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:30px;
            margin-bottom:22px;
        }

        .beneficio-card h3{
            font-size:20px;
            color:var(--white);
            margin-bottom:12px;
        }

        .beneficio-card p{
            color:var(--texto-soft);
            line-height:1.7;
            font-size:15px;
        }

        /* CTA */

        .premium-cta{
            padding:90px 0;
            background:var(--azul-profundo);
            border-top: 1px solid var(--borde);
        }

        .premium-cta-box{
            position:relative;
            overflow:hidden;
            background:
                radial-gradient(circle at top right, rgba(0, 245, 180, 0.15), transparent 30%),
                linear-gradient(135deg,var(--azul-oscuro),#020813);
            border-radius:34px;
            padding:60px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:40px;
            border: 1px solid rgba(0, 245, 180, 0.2);
        }

        .cta-pill{
            display:inline-block;
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.12);
            color:#A7F3D0;
            padding:8px 14px;
            border-radius:999px;
            font-size:12px;
            font-weight:700;
            margin-bottom:20px;
        }

        .premium-cta-content h2{
            color:white;
            font-size:44px;
            line-height:1.1;
            margin-bottom:16px;
            max-width:700px;
        }

        .premium-cta-content p{
            color:rgba(255,255,255,.68);
            font-size:16px;
            line-height:1.7;
            max-width:620px;
        }

        .premium-cta-buttons{
            display:flex;
            flex-direction:column;
            gap:14px;
            min-width:240px;
        }

        .cta-primary,
        .cta-secondary{
            text-decoration:none;
            text-align:center;
            padding:16px 24px;
            border-radius:14px;
            font-weight:700;
            transition:.25s ease;
        }

        .cta-primary{
            background:var(--verde);
            color:white;
        }

        .cta-primary:hover{
            background:var(--verde-hover);
        }

        .cta-secondary{
            border:1px solid rgba(255,255,255,.12);
            background:rgba(255,255,255,.06);
            color:white;
        }

        .cta-secondary:hover{
            background:rgba(255,255,255,.12);
        }

        /* RESPONSIVE */

        @media(max-width:1100px){

            .carreras-hero-container,
            .section-top,
            .premium-cta-box{
                grid-template-columns:1fr;
                flex-direction:column;
                align-items:flex-start;
            }

            .beneficios-grid{
                grid-template-columns:repeat(2,1fr);
            }

        }

        @media(max-width:768px){

            .carreras-hero{
                padding-top:60px;
            }

            .carreras-hero-container,
            .section-container,
            .breadcrumb-container{
                padding-left:20px;
                padding-right:20px;
            }

            .carreras-hero-title{
                font-size:42px;
            }

            .hero-mini-stats{
                gap:16px;
            }

            .mini-stat-divider{
                display:none;
            }

            .carreras-hero-right{
                display:none;
            }

            .section-title{
                font-size:32px;
            }

            .beneficios-grid{
                grid-template-columns:1fr;
            }

            .premium-cta-box{
                padding:36px 24px;
            }

            .premium-cta-content h2{
                font-size:32px;
            }

            .premium-cta-buttons{
                width:100%;
            }

            .cta-primary,
            .cta-secondary{
                width:100%;
            }

        }

    </style>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // 1. Hero Entrance Timeline
        const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
        tl.fromTo(".hero-pill", { opacity: 0, y: -25 }, { opacity: 1, y: 0, duration: 0.8 })
          .fromTo(".carreras-hero-title", { opacity: 0, y: 35 }, { opacity: 1, y: 0, duration: 1 }, "-=0.6")
          .fromTo(".carreras-hero-sub", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
          .fromTo(".hero-buttons .btn-hero-primary, .hero-buttons .btn-hero-secondary", { opacity: 0, scale: 0.95 }, { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15 }, "-=0.5")
          .fromTo(".mini-stat", { opacity: 0, y: 15 }, { opacity: 1, y: 0, duration: 0.6, stagger: 0.1 }, "-=0.4")
          .fromTo(".hero-glass-card", { opacity: 0, x: 50 }, { opacity: 1, x: 0, duration: 0.8 }, "-=0.8")
          .fromTo(".floating-box", { opacity: 0, scale: 0.8 }, { opacity: 1, scale: 1, duration: 0.8, stagger: 0.2 }, "-=0.5")
          .fromTo(".hero-partners span", { opacity: 0, y: 10 }, { opacity: 1, y: 0, duration: 0.8, stagger: 0.1 }, "-=0.6")
          .fromTo(".hero-blur", { opacity: 0, scale: 0.8 }, { opacity: 0.25, scale: 1, duration: 2, stagger: 0.3 }, "-=1.8");

        // 2. Infinite Float Loop
        gsap.to(".float-1", {
            y: -12,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });
        gsap.to(".float-2", {
            y: 12,
            duration: 2.7,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        // 3. Stats dynamic counters
        const statNumbers = document.querySelectorAll(".stat-number");
        statNumbers.forEach(stat => {
            const target = parseFloat(stat.getAttribute("data-target"));
            const prefix = stat.getAttribute("data-prefix") || "";
            const suffix = stat.getAttribute("data-suffix") || "";
            const hasComma = stat.getAttribute("data-format") === "comma";

            gsap.fromTo(stat, 
                { textContent: 0 }, 
                { 
                    textContent: target, 
                    duration: 2, 
                    ease: "power2.out",
                    snap: { textContent: 1 },
                    scrollTrigger: {
                        trigger: stat,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    },
                    onUpdate: function() {
                        let val = Math.floor(this.targets()[0].textContent);
                        if (hasComma) {
                            stat.textContent = prefix + val.toLocaleString('en-US') + suffix;
                        } else {
                            stat.textContent = prefix + val + suffix;
                        }
                    }
                }
            );
        });

        // 4. Staggered catalog grid entrance
        gsap.fromTo(".career-wrapper", 
            { opacity: 0, y: 40 },
            { 
                opacity: 1, 
                y: 0, 
                duration: 0.7, 
                stagger: 0.1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".carreras-grid",
                    start: "top 85%"
                }
            }
        );

        // 5. Staggered reveal for Beneficio Cards
        gsap.fromTo(".beneficio-card",
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.15,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".beneficios-grid",
                    start: "top 85%"
                }
            }
        );

        // Hover effect for Beneficio Cards
        const beneficioCards = document.querySelectorAll(".beneficio-card");
        beneficioCards.forEach(card => {
            card.addEventListener("mouseenter", () => {
                gsap.to(card, { y: -8, scale: 1.02, boxShadow: "0 20px 40px rgba(15,23,42,.08)", duration: 0.3 });
            });
            card.addEventListener("mouseleave", () => {
                gsap.to(card, { y: 0, scale: 1, boxShadow: "none", duration: 0.3 });
            });
        });

        // 6. Premium CTA Zoom Entry
        gsap.fromTo(".premium-cta-box",
            { opacity: 0, scale: 0.95 },
            {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".premium-cta-box",
                    start: "top 90%"
                }
            }
        );
    });
    </script>

</x-layouts.app>