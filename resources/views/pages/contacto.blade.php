<x-layouts.app title="Contacto — SENATI ETI">

    @php
        $canales = [
            [
                'titulo' => 'Teléfono',
                'desc' => 'Comunícate con nuestros asesores y recibe orientación inmediata.',
                'link1' => '988-066-554',
                'link2' => '922-790-223',
                'href1' => 'tel:988066554',
                'href2' => 'tel:922790223',
                'icono' => '📞',
            ],
            [
                'titulo' => 'Correo electrónico',
                'desc' => 'Te respondemos en menos de 24 horas hábiles.',
                'link1' => 'eti-limanorte@senati.edu.pe',
                'href1' => 'mailto:eti-limanorte@senati.edu.pe',
                'icono' => '✉️',
            ],
            [
                'titulo' => 'WhatsApp',
                'desc' => 'Atención rápida para consultas sobre carreras y admisión.',
                'link1' => 'Abrir WhatsApp →',
                'href1' => 'https://wa.me/51988066554',
                'icono' => '💬',
            ],
            [
                'titulo' => 'Visítanos',
                'desc' => 'Conoce nuestra sede y laboratorios especializados.',
                'link1' => 'Jr. Mártir Olaya 129',
                'link2' => 'Independencia, Lima',
                'icono' => '📍',
            ],
        ];

        $infoSede = [
            ['icono' => '📞', 'label' => 'Teléfonos', 'valor' => '988-066-554 / 922-790-223'],
            ['icono' => '✉️', 'label' => 'Correo', 'valor' => 'eti-limanorte@senati.edu.pe'],
            ['icono' => '🕐', 'label' => 'Lunes — Viernes', 'valor' => '8:00 AM — 8:00 PM'],
            ['icono' => '🏫', 'label' => 'Especialidad', 'valor' => 'Tecnologías de la Información'],
        ];

        $beneficios = [
            'Laboratorios equipados con tecnología moderna',
            'Convenios con empresas tecnológicas',
            'Docentes con experiencia en el sector TI',
            'Más del 70% de formación práctica',
        ];
    @endphp

    {{-- HERO --}}
    <section class="contacto-hero">
        <div class="section-container contacto-hero-grid">

            <div>
                <span class="banner-pill">Estamos para ayudarte</span>

                <h1 class="contacto-title">
                    Resolvemos tus dudas <br>
                    sobre SENATI ETI
                </h1>

                <p class="contacto-sub">
                    Nuestro equipo está listo para ayudarte con información sobre carreras,
                    admisión, horarios, costos y oportunidades profesionales en el sector TI.
                </p>

                <div class="contacto-tags">
                    <span>✔ Atención personalizada</span>
                    <span>✔ Respuesta rápida</span>
                    <span>✔ Asesoría gratuita</span>
                </div>
            </div>

            <div class="hero-card">
                <h3>📌 Información rápida</h3>

                <div class="hero-info">
                    <div>
                        <span>Horario</span>
                        <strong>Lun — Vie · 8 AM a 8 PM</strong>
                    </div>

                    <div>
                        <span>Sede</span>
                        <strong>Independencia · Lima Norte</strong>
                    </div>

                    <div>
                        <span>Modalidad</span>
                        <strong>Presencial y práctica</strong>
                    </div>

                    <div>
                        <span>Respuesta</span>
                        <strong>Menos de 24 horas</strong>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- BREADCRUMB --}}
    <div class="breadcrumb">
        <div class="breadcrumb-container">
            <a href="/">Inicio</a>
            <span>›</span>
            <span>Contacto</span>
        </div>
    </div>

    {{-- CANALES --}}
    <section class="contacto-canales">
        <div class="section-container">

            <div class="section-header">
                <span class="section-label">CANALES DE ATENCIÓN</span>
                <h2 class="section-title">Contáctanos como prefieras</h2>
                <p class="section-sub">
                    Puedes comunicarte con SENATI ETI mediante nuestros distintos canales de atención.
                </p>
            </div>

            <div class="canales-grid">

                @foreach ($canales as $canal)
                    <div class="canal-card">

                        <div class="canal-icon">
                            {{ $canal['icono'] }}
                        </div>

                        <h4>{{ $canal['titulo'] }}</h4>
                        <p>{{ $canal['desc'] }}</p>

                        @isset($canal['href1'])
                            <a href="{{ $canal['href1'] }}" class="canal-link">
                                {{ $canal['link1'] }}
                            </a>
                        @else
                            <span class="canal-text">{{ $canal['link1'] }}</span>
                        @endisset

                        @isset($canal['href2'])
                            <a href="{{ $canal['href2'] }}" class="canal-link">
                                {{ $canal['link2'] }}
                            </a>
                        @elseif(isset($canal['link2']))
                            <span class="canal-text">{{ $canal['link2'] }}</span>
                        @endisset

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- MAIN --}}
    <section class="contacto-main">
        <div class="section-container contacto-main-grid">

            {{-- FORM --}}
            <div class="contact-card">

                <div class="card-head">
                    <h3>Envíanos un mensaje</h3>
                    <p>Completa el formulario y un asesor de SENATI ETI se comunicará contigo.</p>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>Nombres completos *</label>
                        <input type="text" class="form-input" placeholder="Ej: Juan Pérez López">
                    </div>

                    <div class="form-group">
                        <label>Teléfono *</label>
                        <input type="text" class="form-input" placeholder="999 999 999">
                    </div>
                </div>

                <div class="form-group">
                    <label>Correo electrónico *</label>
                    <input type="email" class="form-input" placeholder="correo@ejemplo.com">
                </div>

                <div class="form-group">
                    <label>Asunto *</label>

                    <select class="form-input">
                        <option disabled selected>Selecciona una opción</option>
                        <option>Información sobre carreras</option>
                        <option>Proceso de admisión</option>
                        <option>Horarios y turnos</option>
                        <option>Costos y pagos</option>
                        <option>Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mensaje *</label>
                    <textarea class="form-input textarea" placeholder="Escribe tu consulta aquí..."></textarea>
                </div>

                <button class="btn-submit">
                    Enviar mensaje
                </button>

                <p class="form-note">
                    Tus datos están protegidos y serán utilizados únicamente para atender tu consulta.
                </p>

            </div>

            {{-- INFO --}}
            <div class="contact-side">

                <div class="contact-card sede-card">

                    <h3>📍 Sede Lima Norte</h3>

                    <p class="sede-text">
                        SENATI ETI cuenta con laboratorios especializados y ambientes modernos
                        para la formación práctica de futuros profesionales en tecnologías de la información.
                    </p>

                    <div class="mini-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.6501035258075!2d-77.05942271203159!3d-11.99869546249257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf264ba1d329%3A0x83d0c238832c341!2sSENATI!5e0!3m2!1ses!2spe!4v1779557382116!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="sede-info">
                        @foreach ($infoSede as $item)
                            <div class="info-item">
                                <span>{{ $item['icono'] }}</span>

                                <div>
                                    <small>{{ $item['label'] }}</small>
                                    <strong>{{ $item['valor'] }}</strong>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="/admision" class="btn-side">
                        Iniciar proceso de admisión →
                    </a>

                </div>

                <div class="beneficios-card">

                    <span class="section-label">¿POR QUÉ SENATI ETI?</span>

                    <h4>Ventajas de estudiar con nosotros</h4>

                    <div class="beneficios-lista">
                        @foreach ($beneficios as $beneficio)
                            <div class="beneficio-item">
                                <span>✓</span>
                                <p>{{ $beneficio }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>
    </section>

    <style>
        .contacto-hero{
            background: 
                radial-gradient(circle at top left, rgba(0, 255, 196, 0.15) 0%, transparent 40%),
                radial-gradient(circle at bottom right, rgba(0, 86, 198, 0.2) 0%, transparent 40%),
                linear-gradient(135deg, #01060f 0%, #002F6C 50%, #020813 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 72px 0;
        }

        .contacto-hero-grid,
        .contacto-main-grid{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:48px;
            align-items:start;
        }

        .contacto-title{
            font-size:48px;
            line-height:1.1;
            color:#fff;
            margin:18px 0;
        }

        .contacto-sub{
            color:rgba(255,255,255,.72);
            line-height:1.7;
            margin-bottom:28px;
            max-width:620px;
        }

        .banner-pill{
            display:inline-flex;
            padding:8px 16px;
            border-radius:999px;
            border:1px solid rgba(255,255,255,.15);
            background:rgba(255,255,255,.08);
            color:var(--verde-acento);
            font-size:13px;
            font-weight:600;
        }

        .contacto-tags{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
        }

        .contacto-tags span{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.12);
            color:#fff;
            padding:10px 16px;
            border-radius:999px;
            font-size:13px;
        }

        .hero-card,
        .contact-card,
        .beneficios-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius:20px;
            padding:32px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .hero-card h3,
        .contact-card h3,
        .beneficios-card h4{
            font-size:22px;
            margin-bottom:24px;
            color:var(--texto-principal);
        }

        .hero-info{
            display:grid;
            gap:18px;
        }

        .hero-info div{
            display:flex;
            flex-direction:column;
            gap:4px;
        }

        .hero-info span,
        .sede-info small{
            font-size:13px;
            color:var(--texto-secundario);
        }

        .hero-info strong,
        .sede-info strong{
            font-size:15px;
            color:var(--texto-principal);
        }

        .contacto-canales,
        .contacto-main{
            padding:72px 0;
        }

        .contacto-main{
            background:var(--azul-profundo);
        }

        .canales-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        }

        .canal-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius:18px;
            padding:28px;
            transition:.25s ease;
        }

        .canal-card:hover{
            transform:translateY(-6px);
            box-shadow: 0 10px 30px rgba(0, 245, 180, 0.05);
            border-color: rgba(0, 245, 180, 0.2);
        }

        .canal-icon{
            width:60px;
            height:60px;
            border-radius:16px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
            margin-bottom:18px;
            background:rgba(0, 245, 180, 0.08);
            border:1px solid rgba(0, 245, 180, 0.12);
        }

        .canal-card h4{
            font-size:18px;
            margin-bottom:10px;
            color:var(--texto-principal);
        }

        .canal-card p{
            font-size:14px;
            color:var(--texto-secundario);
            line-height:1.7;
            margin-bottom:14px;
        }

        .canal-link,
        .canal-text{
            display:block;
            font-size:14px;
            font-weight:600;
            color:var(--verde);
            margin-bottom:6px;
            text-decoration:none;
        }

        .card-head{
            margin-bottom:28px;
            padding-bottom:22px;
            border-bottom:1px solid var(--borde);
        }

        .card-head p{
            color:var(--texto-secundario);
            font-size:14px;
            line-height:1.6;
        }

        .form-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:16px;
        }

        .form-group{
            display:flex;
            flex-direction:column;
            gap:8px;
            margin-bottom:20px;
        }

        .form-group label{
            font-size:13px;
            font-weight:600;
            color:var(--texto-principal);
        }

        .form-input{
            border:1.5px solid rgba(255, 255, 255, 0.08);
            border-radius:10px;
            padding:12px 14px;
            font-size:14px;
            font-family:inherit;
            outline:none;
            transition:.2s;
            background: rgba(255, 255, 255, 0.03);
            color: white;
        }

        .form-input option{
            color: #020813 !important;
            background-color: #ffffff !important;
        }

        .form-input:focus{
            border-color:var(--verde);
        }

        .textarea{
            resize:vertical;
            min-height:120px;
        }

        .btn-submit,
        .btn-side{
            width:100%;
            border:none;
            border-radius:12px;
            background:var(--verde);
            color:#fff;
            font-weight:700;
            padding:14px;
            cursor:pointer;
            text-decoration:none;
            display:block;
            text-align:center;
            transition:.2s;
        }

        .btn-submit:hover,
        .btn-side:hover{
            background:#009c74;
        }

        .form-note{
            margin-top:12px;
            text-align:center;
            font-size:12px;
            color:var(--texto-secundario);
        }

        .contact-side{
            display:flex;
            flex-direction:column;
            gap:24px;
        }

        .sede-text{
            font-size:14px;
            color:var(--texto-secundario);
            line-height:1.7;
            margin-bottom:20px;
        }

        .mini-map{
            border-radius:14px;
            overflow:hidden;
            margin-bottom:24px;
            border:1px solid var(--borde);
        }

        .mini-map iframe{
            width:100%;
            height:220px;
            border:none;
        }

        .sede-info{
            display:flex;
            flex-direction:column;
            gap:18px;
            margin-bottom:24px;
        }

        .info-item{
            display:flex;
            gap:14px;
            align-items:flex-start;
        }

        .beneficios-lista{
            display:flex;
            flex-direction:column;
            gap:16px;
            margin-top:24px;
        }

        .beneficio-item{
            display:flex;
            gap:12px;
            align-items:flex-start;
        }

        .beneficio-item span{
            width:26px;
            height:26px;
            border-radius:50%;
            background:var(--verde);
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:13px;
            flex-shrink:0;
        }

        .beneficio-item p{
            font-size:14px;
            color:var(--texto-secundario);
            line-height:1.6;
        }

        @media (max-width: 992px){
            .canales-grid{
                grid-template-columns:repeat(2,1fr);
            }

            .contacto-hero-grid,
            .contacto-main-grid{
                grid-template-columns:1fr;
            }
        }

        @media (max-width:768px){

            .contacto-title{
                font-size:32px;
            }

            .form-grid,
            .canales-grid{
                grid-template-columns:1fr;
            }

            .hero-card,
            .contact-card,
            .beneficios-card{
                padding:24px;
            }
        }
    </style>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Disable GSAP on mobile for static loading
        if (window.innerWidth <= 768) return;

        // 1. Hero Load Entrance
        const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
        tl.fromTo(".banner-pill", { opacity: 0, y: -20 }, { opacity: 1, y: 0, duration: 0.8 })
          .fromTo(".contacto-title", { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1 }, "-=0.6")
          .fromTo(".contacto-sub", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
          .fromTo(".contacto-tags span", { opacity: 0, scale: 0.95 }, { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15 }, "-=0.5")
          .fromTo(".contacto-hero .hero-card", { opacity: 0, x: 50 }, { opacity: 1, x: 0, duration: 0.8 }, "-=0.8");

        // 2. Canales Staggered Entry
        gsap.fromTo(".canal-card",
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.15,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".canales-grid",
                    start: "top 85%"
                }
            }
        );

        // Hover effect for Canal Cards
        const canalCards = document.querySelectorAll(".canal-card");
        canalCards.forEach(card => {
            card.addEventListener("mouseenter", () => {
                gsap.to(card, { y: -8, scale: 1.02, boxShadow: "0 16px 30px rgba(0,0,0,.08)", duration: 0.3 });
            });
            card.addEventListener("mouseleave", () => {
                gsap.to(card, { y: 0, scale: 1, boxShadow: "0 10px 30px rgba(0,0,0,.08)", duration: 0.3 });
            });
        });

        // 3. Staggered reveal for contact card form and side panel
        gsap.fromTo(".contacto-main .contact-card",
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".contacto-main-grid",
                    start: "top 85%"
                }
            }
        );

        // Form field focus animations
        const formInputs = document.querySelectorAll(".form-input");
        formInputs.forEach(input => {
            input.addEventListener("focus", () => {
                gsap.to(input, { scale: 1.01, borderColor: "#00C896", duration: 0.3 });
            });
            input.addEventListener("blur", () => {
                gsap.to(input, { scale: 1, borderColor: "rgba(255,255,255,0.08)", duration: 0.3 });
            });
        });
    });
    </script>

</x-layouts.app>