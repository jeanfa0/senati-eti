<x-layouts.app title="SENATI ETI — Escuela de Tecnologías de la Información">

    @php
        $destacadas = [
            'desarrollo-software',
            'ciberseguridad',
            'software-ia',
            'redes-seguridad'
        ];

        $puntos = [
            ['icono' => '⚡', 'titulo' => 'Más del 70% en práctica', 'desc' => 'Talleres, laboratorios y proyectos reales.'],
            ['icono' => '🏢', 'titulo' => 'Alianza con empresas', 'desc' => 'Microsoft, Cisco, IBM y Oracle.'],
            ['icono' => '🎓', 'titulo' => 'Certificación progresiva', 'desc' => 'Certificados por semestre + título final.'],
            ['icono' => '🌐', 'titulo' => 'Inserción laboral', 'desc' => 'Red de empresas socias para prácticas.'],
        ];

        $testimonios = [
            [
                'nombre' => 'Carlos Mendoza',
                'carrera' => 'Desarrollo de Software',
                'empresa' => 'Interbank',
                'texto' => 'Desde el primer semestre ya desarrollábamos proyectos reales.',
                'inicial' => 'C'
            ],
            [
                'nombre' => 'María Torres',
                'carrera' => 'Ciberseguridad',
                'empresa' => 'Telefónica',
                'texto' => 'Aprendí herramientas reales que ahora uso en mi trabajo.',
                'inicial' => 'M'
            ],
            [
                'nombre' => 'Diego Quispe',
                'carrera' => 'Redes y Seguridad',
                'empresa' => 'Claro Perú',
                'texto' => 'Las certificaciones Cisco me abrieron muchas puertas.',
                'inicial' => 'D'
            ]
        ];

        $partners = [
            ['nombre' => 'Microsoft', 'desc' => 'Azure & M365'],
            ['nombre' => 'Cisco', 'desc' => 'Networking Academy'],
            ['nombre' => 'IBM', 'desc' => 'AI & Cloud'],
            ['nombre' => 'Oracle', 'desc' => 'Database & Cloud'],
            ['nombre' => 'Adobe', 'desc' => 'Creative Suite'],
            ['nombre' => 'SAP', 'desc' => 'ERP Enterprise'],
            ['nombre' => 'Autodesk', 'desc' => 'Design & Engineering'],
            ['nombre' => 'Pearson', 'desc' => 'Certifications'],
        ];
    @endphp

    {{-- HERO --}}
    <section class="hero">

        <div class="hero-blur blur-1"></div>
        <div class="hero-blur blur-2"></div>

        <div class="container hero-container">

            <div class="hero-content">

                <div class="hero-left reveal">

                    <span class="hero-pill">
                        Convocatoria 2025 abierta
                    </span>

                    <h1 class="hero-title">
                        Fórmate en la escuela líder de
                        <span>tecnología e innovación</span>
                    </h1>

                    <p class="hero-sub">
                        Aprende con metodologías reales, laboratorios modernos
                        y certificaciones internacionales junto a SENATI ETI.
                    </p>

                    <div class="hero-actions">
                        <a href="/admision" class="btn-primary">
                            Postular ahora
                        </a>

                        <a href="/carreras" class="btn-secondary">
                            Ver carreras
                        </a>
                    </div>

                </div>

                <div class="hero-right reveal" style="position: relative;">

                    <div class="hero-image-wrap" style="position: relative; border-radius: 32px; overflow: hidden; box-shadow: var(--shadow); border: 1px solid rgba(255,255,255,0.15);">
                        <img src="/assets/student_hero.png" alt="Estudiante SENATI ETI" style="width: 100%; display: block; filter: brightness(0.95); transition: transform 0.5s;">
                        
                        <div class="hero-card glass" style="position: absolute; bottom: 20px; left: 20px; right: 20px; margin: 0; padding: 24px; border-radius: 20px; background: rgba(9,18,34,0.75);">

                            <div class="hero-card-badge" style="margin-bottom: 8px;">
                                ⚡ ETI · SENATI
                            </div>

                            <h3 style="font-size: 1.4rem; margin-bottom: 6px;">
                                100% Práctico e Innovador
                            </h3>

                            <p style="font-size: 0.9rem; opacity: 0.85; line-height: 1.5;">
                                Fórmate en laboratorios equipados con tecnología empresarial líder.
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- STATS --}}
    <section class="stats-section">

        <div class="container stats-grid">

            <div class="stat-item">
                <span class="stat-number" data-target="10">0</span>
                <span class="stat-label">Carreras TI</span>
            </div>

            <div class="stat-item">
                <span class="stat-number" data-target="3750" data-prefix="+" data-format="comma">0</span>
                <span class="stat-label">Horas prácticas</span>
            </div>

            <div class="stat-item">
                <span class="stat-number" data-target="3" data-suffix=" años">0</span>
                <span class="stat-label">Duración</span>
            </div>

            <div class="stat-item">
                <span class="stat-number" data-target="60" data-prefix="+">0</span>
                <span class="stat-label">Años de experiencia</span>
            </div>

            <div class="stat-item">
                <span class="stat-number" data-target="100" data-suffix="%">0</span>
                <span class="stat-label">Título oficial</span>
            </div>

        </div>

    </section>

    {{-- CARRERAS --}}
    <section class="section">

        <div class="container">

            <div class="section-header reveal">

                <span class="section-pill">
                    CARRERAS DESTACADAS
                </span>

                <h2 class="section-title">
                    Las carreras más demandadas
                </h2>

                <p class="section-sub">
                    Estudia con tecnologías modernas y aprende
                    mediante proyectos reales.
                </p>

            </div>

            <div class="grid cards-grid">

                @foreach ($carreras as $carrera)
                    @if (in_array($carrera['slug'], $destacadas))
                        <div class="reveal">
                            <x-carrera-card :carrera="$carrera" />
                        </div>
                    @endif
                @endforeach

            </div>

            <div class="center mt-5">
                <a href="/carreras" class="btn-primary">
                    Ver todas las carreras
                </a>
            </div>

        </div>

    </section>

    {{-- EXPERIENCIA --}}
    <section class="section bg-dark">

        <div class="container experience-grid">

            <div class="reveal">

                <span class="section-pill">
                    NUESTRA METODOLOGÍA
                </span>

                <h2 class="section-title white">
                    Aprendizaje práctico desde el primer ciclo
                </h2>

                <p class="section-sub white-soft">
                    La metodología SENATI-EMPRESA permite que los
                    estudiantes trabajen con herramientas reales
                    desde el inicio.
                </p>

                <div class="experience-points">

                    @foreach ($puntos as $punto)

                        <div class="experience-item glass">

                            <div class="experience-icon">
                                {{ $punto['icono'] }}
                            </div>

                            <div>
                                <h4>{{ $punto['titulo'] }}</h4>
                                <p>{{ $punto['desc'] }}</p>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

            <div class="experience-cards reveal">

                <div class="exp-card gradient-blue">
                    <span>+3,750</span>
                    <p>Horas de formación práctica</p>
                </div>

                <div class="exp-card gradient-green">
                    <span>8</span>
                    <p>Partners tecnológicos</p>
                </div>

                <div class="exp-card gradient-purple">
                    <span>6</span>
                    <p>Semestres certificados</p>
                </div>

                <div class="exp-card gradient-gold">
                    <span>Ley 29672</span>
                    <p>Título reconocido por el Estado</p>
                </div>

            </div>

        </div>

    </section>

    {{-- TESTIMONIOS --}}
    <section class="section">

        <div class="container">

            <div class="section-header reveal">

                <span class="section-pill">
                    TESTIMONIOS
                </span>

                <h2 class="section-title">
                    Lo que dicen nuestros egresados
                </h2>

            </div>

            <div class="grid testimonial-grid">

                @foreach ($testimonios as $t)

                    <div class="testimonial-card glass reveal">

                        <div class="stars">
                            ★★★★★
                        </div>

                        <p class="testimonial-text">
                            "{{ $t['texto'] }}"
                        </p>

                        <div class="testimonial-user">

                            <div class="avatar">
                                {{ $t['inicial'] }}
                            </div>

                            <div>
                                <h4>{{ $t['nombre'] }}</h4>
                                <span>{{ $t['carrera'] }}</span>
                                <small>{{ $t['empresa'] }}</small>
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- PARTNERS --}}
    <section class="section bg-light">

        <div class="container">

            <div class="section-header reveal">

                <span class="section-pill">
                    PARTNERS
                </span>

                <h2 class="section-title">
                    Tecnologías globales
                </h2>

            </div>

            <div class="partners-grid">

                @foreach ($partners as $p)

                    <div class="partner-card reveal">

                        <h3>{{ $p['nombre'] }}</h3>
                        <p>{{ $p['desc'] }}</p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- CTA --}}
    <section class="cta-section">

        <div class="container">

            <div class="cta-box reveal">

                <div>

                    <span class="section-pill">
                        Vacantes limitadas
                    </span>

                    <h2>
                        Inicia tu carrera profesional hoy
                    </h2>

                    <p>
                        Forma parte de SENATI ETI y conviértete
                        en un profesional preparado para el futuro.
                    </p>

                </div>

                <div class="cta-buttons">

                    <a href="/admision" class="btn-primary">
                        Postular ahora
                    </a>

                    <a href="/carreras" class="btn-secondary">
                        Ver carreras
                    </a>

                </div>

            </div>

        </div>

    </section>

<style>



*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    background:var(--bg);
    color:var(--text);
    font-family:Inter,sans-serif;
}

.container{
    width:min(1280px, calc(100% - 40px));
    margin:auto;
}

.section{
    padding:110px 0;
}

.bg-dark{
    background:
        linear-gradient(
            135deg,
            #00122c,
            #002F6C,
            #001e44
        );
}

.bg-light{
    background:rgba(255, 255, 255, 0.02);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
}

.center{
    text-align:center;
}

.mt-5{
    margin-top:50px;
}

.grid{
    display:grid;
    gap:24px;
}

.glass{
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,.1);
}

.section-header{
    text-align:center;
    max-width:760px;
    margin:0 auto 70px;
}

.section-pill,
.hero-pill{
    display:inline-flex;
    align-items:center;
    padding:10px 18px;

    border-radius:999px;

    background:rgba(0,217,160,.1);

    border:1px solid rgba(0,217,160,.3);

    color:var(--secondary);

    font-size:.8rem;
    font-weight:700;

    letter-spacing:.5px;

    margin-bottom:20px;
}

.section-title{
    font-size:clamp(2.5rem,5vw,4.5rem);
    line-height:1.1;
    font-weight:800;
    margin-bottom:20px;
}

.section-sub{
    color:var(--text-soft);
    line-height:1.8;
    font-size:1.05rem;
}

.white{
    color:white;
}

.white-soft{
    color:rgba(255,255,255,.65);
}

.hero{
    position:relative;
    overflow:hidden;

    background: 
        radial-gradient(circle at top left, rgba(0, 255, 196, 0.15) 0%, transparent 40%),
        radial-gradient(circle at bottom right, rgba(0, 86, 198, 0.2) 0%, transparent 40%),
        linear-gradient(135deg, #01060f 0%, #002F6C 50%, #020813 100%);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);

    padding:120px 0;
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

.hero-content{
    display:grid;
    grid-template-columns:1fr 450px;
    gap:60px;
    align-items:center;
}

.hero-title{
    font-size:clamp(3rem,6vw,6rem);
    line-height:1;
    font-weight:900;
    color:white;
    margin-bottom:24px;
}

.hero-title span{
    color:var(--secondary-light);
}

.hero-sub{
    font-size:1.1rem;
    color:rgba(255,255,255,.7);
    line-height:1.8;
    max-width:620px;
    margin-bottom:40px;
}

.hero-actions{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

.hero-card{
    border-radius:32px;
    padding:40px;
    box-shadow:var(--shadow);
}

.hero-card h3{
    font-size:2rem;
    color:white;
    margin:16px 0;
}

.hero-card p{
    color:rgba(255,255,255,.65);
    line-height:1.8;
}

.hero-card-badge{
    color:var(--secondary-light);
    font-weight:700;
}

.btn-primary,
.btn-secondary{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:16px 30px;

    border-radius:999px;

    text-decoration:none;

    font-weight:700;

    transition:var(--transition);
}

.btn-primary{
    background:
        linear-gradient(
            135deg,
            var(--secondary),
            var(--secondary-light)
        );

    color:white;

    box-shadow:
        0 10px 30px rgba(0,217,160,.3);
}

.btn-primary:hover{
    transform:translateY(-5px);
}

.btn-secondary{
    border:1px solid rgba(255,255,255,.15);
    color:white;
}

.btn-secondary:hover{
    background:rgba(255,255,255,.08);
}

.stats-section{
    background:#071426;
    padding:50px 0;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:30px;
}

.stat-item{
    text-align:center;
}

.stat-number{
    display:block;
    font-size:2.5rem;
    font-weight:800;
    color:var(--secondary-light);
}

.stat-label{
    color:rgba(255,255,255,.65);
}

.cards-grid{
    grid-template-columns:repeat(4,1fr);
}

.experience-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:80px;
    align-items:center;
}

.experience-points{
    display:flex;
    flex-direction:column;
    gap:20px;
    margin-top:40px;
}

.experience-item{
    padding:24px;
    border-radius:24px;

    display:flex;
    gap:20px;
    align-items:flex-start;
}

.experience-icon{
    font-size:2rem;
}

.experience-item h4{
    color:white;
    margin-bottom:6px;
}

.experience-item p{
    color:rgba(255,255,255,.65);
}

.experience-cards{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:24px;
}

.exp-card{
    padding:36px;
    border-radius:28px;
    color:white;

    transition:var(--transition);
}

.exp-card:hover{
    transform:translateY(-10px);
}

.exp-card span{
    display:block;
    font-size:2.3rem;
    font-weight:800;
    margin-bottom:10px;
}

.gradient-blue{
    background:linear-gradient(135deg,#185FA5,#0B2447);
}

.gradient-green{
    background:linear-gradient(135deg,#00B386,#00D9A0);
}

.gradient-purple{
    background:linear-gradient(135deg,#4338CA,#7C3AED);
}

.gradient-gold{
    background:linear-gradient(135deg,#BA7517,#F59E0B);
}

.testimonial-grid{
    grid-template-columns:repeat(3,1fr);
}

.testimonial-card{
    padding:32px;
    border-radius:28px;
}

.stars{
    color:#F59E0B;
    margin-bottom:18px;
}

.testimonial-text{
    line-height:1.9;
    margin-bottom:28px;
}

.testimonial-user{
    display:flex;
    align-items:center;
    gap:16px;
}

.avatar{
    width:56px;
    height:56px;
    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    background:linear-gradient(
        135deg,
        var(--primary-light),
        var(--secondary)
    );

    color:white;
    font-weight:800;
}

.partners-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:24px;
}

.partner-card{
    background: rgba(255, 255, 255, 0.02);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.06);
    padding:34px;
    border-radius:24px;
    color: white;

    text-align:center;

    transition:var(--transition);

    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
}

.partner-card:hover{
    transform:translateY(-10px);
    border-color: rgba(0, 245, 180, 0.2);
    box-shadow: 0 10px 30px rgba(0, 245, 180, 0.05);
}

.partner-card h3{
    margin-bottom:10px;
    color: white;
}

.partner-card p{
    color:var(--text-soft);
}

.cta-section{
    padding:110px 0;
    background: var(--bg);
    border-top: 1px solid rgba(255,255,255,0.05);
}

.cta-box{
    padding:60px;
    border-radius:40px;

    background:
        radial-gradient(circle at top right, rgba(0, 245, 180, 0.1), transparent 40%),
        linear-gradient(
            135deg,
            rgba(0, 47, 108, 0.2),
            rgba(255,255,255,.02)
        );

    border: 1px solid rgba(0, 245, 180, 0.15);
    backdrop-filter:blur(20px);

    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:50px;
}

.cta-box h2{
    font-size:clamp(2rem,4vw,4rem);
    color:white;
    margin:16px 0;
}

.cta-box p{
    color:rgba(255,255,255,.65);
    line-height:1.8;
}

.cta-buttons{
    display:flex;
    flex-direction:column;
    gap:16px;
    min-width:220px;
}

.reveal{
    opacity: 0;
}

@media (max-width:1200px){

    .cards-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .partners-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

@media (max-width:992px){

    .hero-content,
    .experience-grid,
    .cta-box{
        grid-template-columns:1fr;
        flex-direction:column;
    }

    .hero-right{
        width:100%;
    }

    .stats-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .testimonial-grid{
        grid-template-columns:1fr;
    }

}

@media (max-width:768px){

    .section{
        padding:80px 0;
    }

    .cards-grid,
    .partners-grid,
    .experience-cards,
    .stats-grid{
        grid-template-columns:1fr;
    }

    .hero{
        padding:90px 0;
    }

    .hero-actions{
        flex-direction:column;
    }

    .cta-box{
        padding:40px 30px;
    }

}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // 1. Hero Load Entry Animation
    const heroTimeline = gsap.timeline({ defaults: { ease: "power3.out" } });
    
    heroTimeline
        .set(".hero-left.reveal, .hero-right.reveal", { opacity: 1 })
        .fromTo(".hero-pill", { opacity: 0, y: -20 }, { opacity: 1, y: 0, duration: 0.8 })
        .fromTo(".hero-title", { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1 }, "-=0.6")
        .fromTo(".hero-sub", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
        .fromTo(".hero-actions .btn-primary, .hero-actions .btn-secondary", { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15 }, "-=0.5")
        .fromTo(".hero-card", { opacity: 0, x: 50 }, { opacity: 1, x: 0, duration: 0.8 }, "-=0.8")
        .fromTo(".hero-blur", { opacity: 0, scale: 0.8 }, { opacity: 0.15, scale: 1, duration: 2, stagger: 0.3 }, "-=1.5");

    // Smooth hover effect for hero card
    const heroCard = document.querySelector(".hero-card");
    if (heroCard) {
        heroCard.addEventListener("mousemove", (e) => {
            const rect = heroCard.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            gsap.to(heroCard, {
                rotateY: x * 0.05,
                rotateX: -y * 0.05,
                ease: "power2.out",
                duration: 0.5
            });
        });
        heroCard.addEventListener("mouseleave", () => {
            gsap.to(heroCard, {
                rotateY: 0,
                rotateX: 0,
                ease: "power2.out",
                duration: 0.5
            });
        });
    }

    // 2. Stats Dynamic Counter Animation
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

    // 3. Scroll Reveal for Sections
    const reveals = document.querySelectorAll(".reveal");
    reveals.forEach(el => {
        // Skip hero since it's already animated
        if (el.closest('.hero')) return;

        gsap.fromTo(el,
            { opacity: 0, y: 50 },
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

    // 4. Partner Cards Staggered Hover & Scroll
    const partnerCards = document.querySelectorAll(".partner-card");
    if (partnerCards.length > 0) {
        gsap.fromTo(partnerCards,
            { opacity: 0, scale: 0.9, y: 30 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".partners-grid",
                    start: "top 85%"
                }
            }
        );
        partnerCards.forEach(card => {
            card.addEventListener("mouseenter", () => {
                gsap.to(card, { y: -10, scale: 1.03, boxShadow: "0 20px 40px rgba(2,6,23,.12)", duration: 0.3 });
            });
            card.addEventListener("mouseleave", () => {
                gsap.to(card, { y: 0, scale: 1, boxShadow: "0 4px 20px rgba(0,0,0,.04)", duration: 0.3 });
            });
        });
    }

    // 5. Testimonial Hover Cards
    const testimonialCards = document.querySelectorAll(".testimonial-card");
    testimonialCards.forEach(card => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, { y: -8, scale: 1.02, duration: 0.3, ease: "power2.out" });
        });
        card.addEventListener("mouseleave", () => {
            gsap.to(card, { y: 0, scale: 1, duration: 0.3, ease: "power2.out" });
        });
    });
});
</script>
</x-layouts.app>