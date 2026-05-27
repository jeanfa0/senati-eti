<x-layouts.app title="{{ $carrera['nombre'] }} — SENATI ETI">

    @php
        $certificaciones = [
            [
                'sem' => 'II Semestre',
                'cert' => 'Asistente de Analista de Sistemas',
                'desc' => 'Fundamentos de programación, lógica computacional y herramientas modernas.'
            ],
            [
                'sem' => 'III Semestre',
                'cert' => 'Analista de Sistemas',
                'desc' => 'Modelado de datos, arquitectura y análisis de soluciones empresariales.'
            ],
            [
                'sem' => 'IV Semestre',
                'cert' => 'Administrador de Base de Datos',
                'desc' => 'SQL avanzado, optimización y administración de servidores.'
            ],
            [
                'sem' => 'V Semestre',
                'cert' => 'Desarrollador de Aplicaciones',
                'desc' => 'Aplicaciones modernas, APIs y frameworks profesionales.'
            ],
            [
                'sem' => 'VI Semestre',
                'cert' => 'Desarrollador Fullstack',
                'desc' => 'Cloud computing, despliegue, DevOps y desarrollo web empresarial.'
            ],
        ];

        $partners = [
            'Microsoft',
            'Cisco',
            'IBM',
            'Oracle',
            'Adobe',
            'SAP',
            'Autodesk',
            'Pearson'
        ];
    @endphp

    {{-- BREADCRUMB --}}
    <div class="breadcrumb">
        <div class="breadcrumb-container">
            <a href="/">Inicio</a>
            <span>/</span>

            <a href="/carreras">Carreras</a>
            <span>/</span>

            <span>{{ $carrera['nombre'] }}</span>
        </div>
    </div>

    {{-- HERO --}}
    <section class="career-hero">

        <div class="hero-blur blur-1"></div>
        <div class="hero-blur blur-2"></div>

        <div class="container">

            <div class="career-hero-grid">

                <div class="career-left reveal">

                    <span class="career-pill">
                        PROFESIONAL TÉCNICO
                    </span>

                    <h1 class="career-title">
                        {{ $carrera['nombre'] }}
                    </h1>

                    <p class="career-description">
                        {{ $carrera['descripcion'] }}
                    </p>

                    <div class="career-actions">

                        <a href="/admision" class="btn-primary">
                            Postular ahora
                        </a>

                        <a href="#" class="btn-secondary">
                            Descargar brochure
                        </a>

                    </div>

                </div>

                <div class="career-right reveal">

                    <div class="hero-stats">

                        <div class="hero-stat glass">
                            <span class="stat-number" data-target="3" data-suffix=" años">0</span>
                            <small>Duración</small>
                        </div>

                        <div class="hero-stat glass">
                            <span class="stat-number" data-target="6">0</span>
                            <small>Semestres</small>
                        </div>

                        <div class="hero-stat glass">
                            <span class="stat-number" data-target="3750" data-prefix="+" data-format="comma">0</span>
                            <small>Horas prácticas</small>
                        </div>

                    </div>

                    <div class="career-floating-card glass">

                        <div class="floating-badge">
                            SENATI EMPRESA
                        </div>

                        <h3>
                            Formación basada en proyectos reales
                        </h3>

                        <p>
                            Aprende utilizando tecnologías modernas
                            y herramientas del mercado laboral.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- BODY --}}
    <section class="career-body">

        <div class="container">

            <div class="career-layout">

                {{-- MAIN --}}
                <main class="career-main">

                    <div class="content-card reveal">

                        <div class="section-head">

                            <span class="section-pill">
                                DESCRIPCIÓN
                            </span>

                            <h2>
                                Sobre la carrera
                            </h2>

                        </div>

                        <p class="career-text">
                            La carrera de
                            <strong>{{ $carrera['nombre'] }}</strong>
                            forma profesionales preparados para diseñar,
                            implementar y gestionar soluciones tecnológicas
                            modernas en entornos empresariales reales.
                        </p>

                        <p class="career-text">
                            Gracias a la metodología SENATI-EMPRESA,
                            los estudiantes desarrollan proyectos prácticos
                            desde el primer semestre utilizando herramientas
                            y tecnologías utilizadas por compañías líderes.
                        </p>

                    </div>

                    {{-- CERTIFICACIONES --}}
                    <div class="content-card reveal">

                        <div class="section-head">

                            <span class="section-pill">
                                CERTIFICACIONES
                            </span>

                            <h2>
                                Certificación progresiva
                            </h2>

                        </div>

                        <div class="timeline">

                            @foreach ($certificaciones as $i => $item)

                                <div class="timeline-item">

                                    <div class="timeline-left">

                                        <div class="timeline-dot"
                                            style="background: {{ $carrera['color'] }}">
                                            {{ $i + 1 }}
                                        </div>

                                        @if (!$loop->last)
                                            <div class="timeline-line" style="background: linear-gradient(to bottom, {{ $carrera['color'] }} 0%, rgba(255,255,255,0.05) 100%);"></div>
                                        @endif

                                    </div>

                                    <div class="timeline-content glass">

                                        <span class="timeline-sem">
                                            {{ $item['sem'] }}
                                        </span>

                                        <h3>
                                            {{ $item['cert'] }}
                                        </h3>

                                        <p>
                                            {{ $item['desc'] }}
                                        </p>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                    {{-- TITULACIÓN --}}
                    <div class="title-box reveal">

                        <div class="title-icon">
                            🎓
                        </div>

                        <div>

                            <h3>
                                Título a Nombre de la Nación
                            </h3>

                            <p>
                                Reconocido por el Estado peruano bajo
                                la Ley N°29672 con validez nacional.
                            </p>

                        </div>

                    </div>

                </main>

                {{-- SIDEBAR --}}
                <aside class="career-sidebar">

                    <div class="sidebar-card reveal">

                        <h3>
                            Información académica
                        </h3>

                        <div class="sidebar-items">

                            <div class="sidebar-item">
                                <span>📅</span>

                                <div>
                                    <small>Duración</small>
                                    <strong>3 años</strong>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <span>🏫</span>

                                <div>
                                    <small>Modalidad</small>
                                    <strong>Presencial</strong>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <span>📍</span>

                                <div>
                                    <small>Sede</small>
                                    <strong>Independencia</strong>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <span>🕐</span>

                                <div>
                                    <small>Horarios</small>
                                    <strong>Mañana / Tarde / Noche</strong>
                                </div>
                            </div>

                        </div>

                        <a href="/admision"
                            class="sidebar-btn"
                            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.25) 100%), {{ $carrera['color'] }};">
                            Postular ahora
                        </a>

                    </div>

                    {{-- PARTNERS --}}
                    <div class="sidebar-card reveal">

                        <h3>
                            Partners estratégicos
                        </h3>

                        <div class="partners-grid">

                            @foreach ($partners as $partner)

                                <div class="partner-chip">
                                    {{ $partner }}
                                </div>

                            @endforeach

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>

<style>

:root{
    --primary: var(--azul-oscuro);
    --primary-light: var(--primary-light);
    --secondary: var(--secondary);
    --secondary-light: var(--verde-acento);
    --text: var(--white);
    --text-soft: rgba(255, 255, 255, 0.7);
    --bg: var(--azul-profundo);
    --white: var(--white);
    --radius:28px;
    --border: var(--borde);
    --shadow: var(--shadow);
    --transition: var(--transition);
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family: var(--font-sans);
    background:var(--bg);
    color:var(--text);
}

.container{
    width:min(1280px, calc(100% - 40px));
    margin:auto;
}

.glass{
    background:rgba(255,255,255,.05);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,.08);
}

.career-hero{
    position:relative;
    overflow:hidden;
    padding:120px 0;
    background: 
        radial-gradient(circle at top left, rgba(0, 255, 196, 0.15) 0%, transparent 40%),
        radial-gradient(circle at bottom right, rgba(0, 86, 198, 0.2) 0%, transparent 40%),
        linear-gradient(135deg, #01060f 0%, #002F6C 50%, #020813 100%);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.hero-blur{
    position:absolute;
    width:450px;
    height:450px;
    border-radius:50%;
    filter:blur(120px);
    opacity:.15;
}

.blur-1{
    background:#00D9A0;
    top:-120px;
    left:-120px;
}

.blur-2{
    background:#185FA5;
    bottom:-120px;
    right:-120px;
}

.career-hero-grid{
    display:grid;
    grid-template-columns:1fr 420px;
    gap:70px;
    align-items:center;
}

.career-pill,
.section-pill{
    display:inline-flex;
    align-items:center;
    padding:10px 18px;
    border-radius:999px;
    background:rgba(0, 245, 180, 0.08);
    border:1px solid rgba(0, 245, 180, 0.2);
    color:var(--secondary-light);
    font-family: var(--font-display);
    font-size:.8rem;
    font-weight:700;
    letter-spacing: 1px;
    margin-bottom:24px;
}

.career-title{
    font-family: var(--font-display);
    font-size:clamp(2.8rem, 5.5vw, 4.5rem);
    line-height: 1.05;
    font-weight: 800;
    letter-spacing: -1.5px;
    color: white;
    background: linear-gradient(135deg, #FFFFFF 60%, {{ $carrera['color'] }} 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom:24px;
}

.career-description{
    color:rgba(255, 255, 255, 0.85);
    font-size:1.15rem;
    line-height:1.8;
    max-width:700px;
    margin-bottom:40px;
}

.career-actions{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

.btn-primary,
.btn-secondary{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:16px 32px;
    border-radius:999px;
    font-weight:700;
    text-decoration:none;
    transition:var(--transition);
}

.btn-primary{
    background: linear-gradient(135deg, var(--secondary) 0%, #008A64 100%);
    color: white;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow: 0 10px 30px rgba(0, 179, 134, 0.3);
}

.btn-primary:hover{
    transform:translateY(-5px);
    background: linear-gradient(135deg, #00B386 0%, #009e75 100%);
    box-shadow: 0 15px 35px rgba(0, 179, 134, 0.4);
}

.btn-secondary{
    border:1.5px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(4px);
    color: white;
}

.btn-secondary:hover{
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.4);
    transform: translateY(-3px);
}

.hero-stats{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:16px;
    margin-bottom:24px;
}

.hero-stat{
    padding:28px 18px;
    border-radius:24px;
    text-align:center;
    box-shadow: inset 0 1px 2px rgba(255,255,255,0.05);
}

.hero-stat span{
    display:block;
    font-family: var(--font-display);
    font-size:2.4rem;
    font-weight:800;
    color:var(--secondary-light);
    margin-bottom:6px;
}

.hero-stat small{
    color:rgba(255, 255, 255, 0.75);
    font-weight: 500;
    font-size: 0.85rem;
}

.career-floating-card{
    padding:34px;
    border-radius:32px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4), inset 0 1px 2px rgba(255, 255, 255, 0.08);
}

.floating-badge{
    color:var(--secondary-light);
    font-family: var(--font-display);
    font-weight:700;
    letter-spacing: 1px;
    font-size: 0.85rem;
    margin-bottom:16px;
}

.career-floating-card h3{
    font-family: var(--font-display);
    font-size:1.6rem;
    font-weight: 700;
    color:white;
    margin-bottom:14px;
}

.career-floating-card p{
    color:rgba(255, 255, 255, 0.8);
    line-height:1.7;
    font-size: 0.95rem;
}

.career-body{
    padding:90px 0;
}

.career-layout{
    display:grid;
    grid-template-columns:1fr 360px;
    gap:40px;
}

.career-main{
    display:flex;
    flex-direction:column;
    gap:30px;
}

.content-card{
    background: rgba(255, 255, 255, 0.02);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius:32px;
    padding:42px;
    box-shadow: 0 15px 40px rgba(0,0,0,.25), inset 0 1px 1px rgba(255, 255, 255, 0.05);
}

.section-head{
    margin-bottom:28px;
}

.section-head h2{
    font-family: var(--font-display);
    font-size:2.2rem;
    font-weight: 800;
    letter-spacing: -0.5px;
    background: linear-gradient(135deg, #FFFFFF 60%, {{ $carrera['color'] }} 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.career-text{
    line-height:1.9;
    color:rgba(255, 255, 255, 0.85);
    font-size:1.05rem;
    margin-bottom:18px;
}

.timeline{
    display:flex;
    flex-direction:column;
    gap:30px;
}

.timeline-item{
    display:grid;
    grid-template-columns:60px 1fr;
    gap:24px;
}

.timeline-left{
    display:flex;
    flex-direction:column;
    align-items:center;
}

.timeline-dot{
    width:44px;
    height:44px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:800;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3), inset 0 2px 4px rgba(255, 255, 255, 0.2);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.15);
}

.timeline-line{
    width:2px;
    flex:1;
    margin-top:10px;
}

.timeline-content{
    padding:30px;
    border-radius:28px;
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(12px);
    border:1px solid rgba(255,255,255,0.08);
    box-shadow: inset 0 1px 1px rgba(255,255,255,0.02);
}

.timeline-sem{
    color:var(--secondary-light);
    font-family: var(--font-display);
    font-size:.85rem;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:1px;
}

.timeline-content h3{
    font-family: var(--font-display);
    font-weight: 700;
    margin:10px 0 14px;
    font-size:1.3rem;
    color: white;
}

.timeline-content p{
    color:rgba(255, 255, 255, 0.8);
    line-height:1.8;
}

.title-box{
    display:flex;
    gap:24px;
    align-items:flex-start;
    padding:34px;
    border-radius:30px;
    background:
        linear-gradient(
            135deg,
            rgba(0,179,134,.08),
            rgba(24,95,165,.08)
        );
    border:1px solid rgba(0,179,134,.12);
}

.title-icon{
    font-size:2.5rem;
}

.title-box h3{
    font-family: var(--font-display);
    font-weight: 700;
    margin-bottom:8px;
    color: white;
}

.title-box p{
    color:rgba(255, 255, 255, 0.85);
    line-height:1.8;
}

.career-sidebar{
    position:sticky;
    top:100px;
    height:max-content;
    display:flex;
    flex-direction:column;
    gap:24px;
}

.sidebar-card{
    background: rgba(255, 255, 255, 0.02);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius:30px;
    padding:30px;
    box-shadow: 0 15px 40px rgba(0,0,0,.25), inset 0 1px 1px rgba(255,255,255,0.03);
}

.sidebar-card h3{
    font-family: var(--font-display);
    font-weight: 700;
    margin-bottom:26px;
    color: white;
}

.sidebar-items{
    display:flex;
    flex-direction:column;
    gap:20px;
    margin-bottom:28px;
}

.sidebar-item{
    display:flex;
    gap:16px;
    align-items:flex-start;
}

.sidebar-item span{
    font-size:1.4rem;
}

.sidebar-item small{
    display:block;
    color:rgba(255, 255, 255, 0.7);
    margin-bottom:4px;
    font-size: 0.85rem;
}

.sidebar-item strong{
    font-family: var(--font-display);
    font-weight: 600;
    font-size:1.05rem;
    color: white;
}

.sidebar-btn{
    display:flex;
    align-items:center;
    justify-content:center;
    width:100%;
    padding:16px;
    border-radius:18px;
    color:white;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    text-decoration:none;
    font-weight:700;
    transition:var(--transition);
}

.sidebar-btn:hover{
    transform:translateY(-4px);
    filter: brightness(1.1);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
}

.partners-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:12px;
}

.partner-chip{
    padding:14px;
    border-radius:16px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    text-align:center;
    color:rgba(255, 255, 255, 0.8);
    font-size:.9rem;
    font-weight:700;
    transition:var(--transition);
}

.reveal{
    opacity: 0;
}

@media (max-width:1100px){
    .career-hero-grid,
    .career-layout{
        grid-template-columns:1fr;
    }
    .career-sidebar{
        position:static;
    }
}

@media (max-width:768px){
    .career-hero{
        padding:90px 0;
    }
    .hero-stats,
    .partners-grid{
        grid-template-columns:1fr;
    }
    .career-actions{
        flex-direction:column;
    }
    .content-card,
    .sidebar-card{
        padding:28px;
    }
    .timeline-item{
        grid-template-columns:40px 1fr;
        gap:18px;
    }
    .title-box{
        flex-direction:column;
    }
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // 1. Hero Load Entrance
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
    tl.set(".career-left.reveal, .career-right.reveal", { opacity: 1 })
      .fromTo(".career-pill", { opacity: 0, y: -20 }, { opacity: 1, y: 0, duration: 0.8 })
      .fromTo(".career-title", { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1 }, "-=0.6")
      .fromTo(".career-description", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
      .fromTo(".career-actions .btn-primary, .career-actions .btn-secondary", { opacity: 0, scale: 0.95 }, { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15 }, "-=0.5")
      .fromTo(".hero-stat", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.6, stagger: 0.1 }, "-=0.4")
      .fromTo(".career-floating-card", { opacity: 0, x: 50 }, { opacity: 1, x: 0, duration: 0.8 }, "-=0.8")
      .fromTo(".hero-blur", { opacity: 0, scale: 0.8 }, { opacity: 0.25, scale: 1, duration: 2, stagger: 0.3 }, "-=1.5");

    // 2. Stats Dynamic Counters
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

    // 3. Staggered reveal for timeline certificaciones
    gsap.fromTo(".timeline-item",
        { opacity: 0, x: -30 },
        {
            opacity: 1,
            x: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".timeline",
                start: "top 85%"
            }
        }
    );

    // 4. Staggered hover animations for partner chips
    const partnerChips = document.querySelectorAll(".partner-chip");
    if (partnerChips.length > 0) {
        gsap.fromTo(partnerChips,
            { opacity: 0, scale: 0.9, y: 15 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 0.5,
                stagger: 0.05,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".partners-grid",
                    start: "top 85%"
                }
            }
        );
        partnerChips.forEach(chip => {
            chip.addEventListener("mouseenter", () => {
                gsap.to(chip, { 
                    y: -5, 
                    scale: 1.05, 
                    backgroundColor: "rgba(255, 255, 255, 0.08)", 
                    borderColor: "{{ $carrera['color'] }}", 
                    color: "#FFFFFF", 
                    duration: 0.3 
                });
            });
            chip.addEventListener("mouseleave", () => {
                gsap.to(chip, { 
                    y: 0, 
                    scale: 1, 
                    backgroundColor: "rgba(255,255,255,0.04)", 
                    borderColor: "rgba(255,255,255,0.08)", 
                    color: "#C7D2FE", 
                    duration: 0.3 
                });
            });
        });
    }

    // 5. Scroll Reveal for other sections (.reveal)
    const reveals = document.querySelectorAll(".reveal");
    reveals.forEach(el => {
        if (el.closest('.career-hero')) return;

        gsap.fromTo(el,
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            }
        );
    });
});
</script>
</x-layouts.app>