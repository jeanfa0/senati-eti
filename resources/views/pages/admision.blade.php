<x-layouts.app title="Admisión — SENATI ETI">

    {{-- HERO --}}
    <section class="admision-hero">
        <div class="hero-bg"></div>

        <div class="admision-hero-container">

            <div class="admision-hero-left">
                <span class="hero-pill">ADMISIÓN 2026 · ESCUELA ETI</span>

                <h1 class="admision-title">
                    Inicia tu carrera profesional
                    <span>en tecnología</span>
                </h1>

                <p class="admision-desc">
                    Postula a una de nuestras carreras de la Escuela de Tecnologías de la Información
                    de SENATI y fórmate con una metodología práctica enfocada en proyectos reales,
                    laboratorios modernos y alta empleabilidad.
                </p>

                <div class="hero-btns">
                    <a href="#postular" class="btn-primary">
                        Postular ahora
                    </a>

                    <a href="#requisitos" class="btn-secondary">
                        Ver requisitos
                    </a>
                </div>

                <div class="hero-mini-stats">

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="10">0</strong>
                        <span>Carreras TI</span>
                    </div>

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="3750" data-prefix="+" data-format="comma">0</strong>
                        <span>Horas prácticas</span>
                    </div>

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="3" data-suffix=" años">0</strong>
                        <span>Duración</span>
                    </div>

                    <div class="mini-stat">
                        <strong class="stat-number" data-target="100" data-suffix="%">0</strong>
                        <span>Presencial</span>
                    </div>

                </div>
            </div>

            <div class="admision-hero-right">

                <div class="convocatoria-card">

                    <div class="convocatoria-top">
                        <span class="convocatoria-badge">📋 Próxima convocatoria</span>
                        <span class="convocatoria-status">Vacantes abiertas</span>
                    </div>

                    <div class="convocatoria-items">

                        <div class="convocatoria-item">
                            <span>Inicio de clases</span>
                            <strong>Marzo 2026</strong>
                        </div>

                        <div class="convocatoria-item">
                            <span>Cierre de inscripción</span>
                            <strong>28 Febrero 2026</strong>
                        </div>

                        <div class="convocatoria-item">
                            <span>Modalidad</span>
                            <strong>Presencial · Lima Norte</strong>
                        </div>

                        <div class="convocatoria-item">
                            <span>Vacantes</span>
                            <strong class="verde">30 por carrera</strong>
                        </div>

                    </div>

                    <div class="convocatoria-footer">
                        <div class="footer-icon">🎓</div>

                        <div>
                            <strong>Título a nombre de la Nación</strong>
                            <p>Ley N°29672 · SENATI ETI</p>
                        </div>
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
            <span>Admisión</span>
        </div>
    </div>

    {{-- PROCESO --}}
    <section class="admision-proceso">

        <div class="section-container">

            <div class="section-header">
                <span class="section-label">PROCESO DE POSTULACIÓN</span>
                <h2 class="section-title">
                    Tu admisión paso a paso
                </h2>

                <p class="section-sub">
                    El proceso de admisión en SENATI ETI es rápido, sencillo y acompañado por asesores especializados.
                </p>
            </div>

            <div class="timeline">

                @foreach ([
                    [
                        'icono' => '🎯',
                        'titulo' => 'Elige tu carrera',
                        'desc' => 'Explora nuestras carreras profesionales en tecnología y encuentra la especialidad ideal para ti.'
                    ],
                    [
                        'icono' => '📝',
                        'titulo' => 'Completa tu solicitud',
                        'desc' => 'Llena el formulario online con tus datos personales y académicos.'
                    ],
                    [
                        'icono' => '📂',
                        'titulo' => 'Entrega documentos',
                        'desc' => 'Presenta tus documentos requeridos en nuestra sede de Lima Norte.'
                    ],
                    [
                        'icono' => '🤝',
                        'titulo' => 'Entrevista vocacional',
                        'desc' => 'Recibe orientación personalizada de nuestros asesores educativos.'
                    ],
                    [
                        'icono' => '✅',
                        'titulo' => 'Realiza tu matrícula',
                        'desc' => 'Reserva tu vacante y prepárate para iniciar tu formación profesional.'
                    ],
                ] as $i => $paso)

                    <div class="timeline-card">

                        <div class="timeline-top">

                            <div class="timeline-icon">
                                {{ $paso['icono'] }}
                            </div>

                            <span class="timeline-number">
                                0{{ $i + 1 }}
                            </span>

                        </div>

                        <h3 class="timeline-title">
                            {{ $paso['titulo'] }}
                        </h3>

                        <p class="timeline-desc">
                            {{ $paso['desc'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- REQUISITOS --}}
    <section class="admision-requisitos" id="requisitos">

        <div class="section-container">

            <div class="requisitos-grid">

                {{-- DOCUMENTOS --}}
                <div class="req-card">

                    <span class="section-label">
                        DOCUMENTOS NECESARIOS
                    </span>

                    <h2 class="section-title left">
                        Requisitos de admisión
                    </h2>

                    <div class="req-list">

                        @foreach ([
                            [
                                'titulo' => 'DNI vigente',
                                'detalle' => 'Original y copia simple'
                            ],
                            [
                                'titulo' => 'Certificado de estudios',
                                'detalle' => 'Secundaria completa'
                            ],
                            [
                                'titulo' => 'Fotos tamaño carné',
                                'detalle' => 'Fondo blanco'
                            ],
                            [
                                'titulo' => 'Partida de nacimiento',
                                'detalle' => 'Original o copia legalizada'
                            ],
                            [
                                'titulo' => 'Ficha de postulación',
                                'detalle' => 'Formulario online firmado'
                            ],
                        ] as $req)

                            <div class="req-item">

                                <div class="req-check">
                                    ✓
                                </div>

                                <div>
                                    <strong>{{ $req['titulo'] }}</strong>
                                    <span>{{ $req['detalle'] }}</span>
                                </div>

                            </div>

                        @endforeach

                    </div>

                    <div class="req-alert">
                        <span>⚠️</span>

                        <p>
                            Todos los documentos deben entregarse dentro del plazo establecido para asegurar tu vacante.
                        </p>
                    </div>

                </div>

                {{-- TURNOS --}}
                <div class="req-card">

                    <span class="section-label">
                        TURNOS DISPONIBLES
                    </span>

                    <h2 class="section-title left">
                        Elige tu horario
                    </h2>

                    <div class="turnos-grid">

                        @foreach ([
                            [
                                'icono' => '🌅',
                                'titulo' => 'Turno Mañana',
                                'hora' => '7:00 AM — 1:00 PM'
                            ],
                            [
                                'icono' => '☀️',
                                'titulo' => 'Turno Tarde',
                                'hora' => '1:00 PM — 7:00 PM'
                            ],
                            [
                                'icono' => '🌙',
                                'titulo' => 'Turno Noche',
                                'hora' => '7:00 PM — 10:00 PM'
                            ],
                        ] as $turno)

                            <div class="turno-card">

                                <div class="turno-left">
                                    <span class="turno-icon">
                                        {{ $turno['icono'] }}
                                    </span>

                                    <div>
                                        <strong>{{ $turno['titulo'] }}</strong>
                                        <span>{{ $turno['hora'] }}</span>
                                    </div>
                                </div>

                                <span class="turno-badge">
                                    Disponible
                                </span>

                            </div>

                        @endforeach

                    </div>

                    <div class="sede-box">

                        <h4>📍 Sede Lima Norte</h4>

                        <p>
                            Jr. Mártir Olaya 129, Independencia, Lima
                        </p>

                        <div class="sede-contacto">
                            <span>📞 988-066-554</span>
                            <span>✉️ eti-limanorte@senati.edu.pe</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- BENEFICIOS --}}
    <section class="admision-beneficios">

        <div class="section-container">

            <div class="section-header">
                <span class="section-label">
                    ¿POR QUÉ SENATI ETI?
                </span>

                <h2 class="section-title">
                    Beneficios para nuestros estudiantes
                </h2>
            </div>

            <div class="beneficios-grid">

                @foreach ([
                    [
                        'icono' => '💻',
                        'titulo' => 'Laboratorios modernos',
                        'desc' => 'Equipados con tecnología actual utilizada en empresas del sector TI.'
                    ],
                    [
                        'icono' => '🏢',
                        'titulo' => 'Convenios empresariales',
                        'desc' => 'Prácticas y oportunidades laborales con empresas tecnológicas.'
                    ],
                    [
                        'icono' => '📚',
                        'titulo' => 'Certificación progresiva',
                        'desc' => 'Obtén certificados durante tu formación profesional.'
                    ],
                    [
                        'icono' => '🚀',
                        'titulo' => 'Alta empleabilidad',
                        'desc' => 'Egresados preparados para el mercado laboral actual.'
                    ],
                ] as $beneficio)

                    <div class="beneficio-card">

                        <div class="beneficio-icon">
                            {{ $beneficio['icono'] }}
                        </div>

                        <h3>
                            {{ $beneficio['titulo'] }}
                        </h3>

                        <p>
                            {{ $beneficio['desc'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- FORMULARIO --}}
    <section class="admision-form" id="postular">

        <div class="section-container">

            <div class="form-wrapper">

                <div class="form-left">

                    <span class="section-label">
                        POSTULACIÓN ONLINE
                    </span>

                    <h2 class="section-title left">
                        Completa tu solicitud
                    </h2>

                    <p class="section-sub left">
                        Un asesor se comunicará contigo en menos de 24 horas para ayudarte en tu proceso de admisión.
                    </p>

                    <div class="form-beneficios">

                        @foreach ([
                            'Inscripción gratuita',
                            'Asesoría personalizada',
                            'Respuesta rápida',
                            'Proceso sencillo',
                        ] as $item)

                            <div class="beneficio-item">
                                <div>✓</div>
                                <span>{{ $item }}</span>
                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="form-right">

                    <div class="form-card">

                        <h3>
                            Formulario de postulación
                        </h3>

                        <div class="input-group">
                            <label>Nombres completos *</label>
                            <input type="text" placeholder="Ej: Juan Pérez López">
                        </div>

                        <div class="form-row">

                            <div class="input-group">
                                <label>DNI *</label>
                                <input type="text" placeholder="12345678">
                            </div>

                            <div class="input-group">
                                <label>Teléfono *</label>
                                <input type="text" placeholder="999 999 999">
                            </div>

                        </div>

                        <div class="input-group">
                            <label>Correo electrónico *</label>
                            <input type="email" placeholder="correo@ejemplo.com">
                        </div>

                        <div class="input-group">
                            <label>Carrera de interés *</label>

                            <select>
                                <option selected disabled>
                                    Selecciona una carrera
                                </option>

                                <option>Desarrollo de Software</option>
                                <option>Diseño y Desarrollo de Video Juegos y Realidad Aumentada</option>
                                <option>Diseño y Desarrollo Web</option>
                                <option>Ingeniería de Ciberseguridad</option>
                                <option>Cloud Computing y Data Center</option>
                                <option>Ingeniería de Software con Inteligencia Artificial</option>
                                <option>Ingeniería de Soporte de TI</option>
                                <option>Redes y Seguridad Informática</option>
                                <option>Internet de las Cosas y Machine Learning</option>
                                <option>Soporte y Mantenimiento de Equipos de Computación</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <label>Turno preferido *</label>

                            <select>
                                <option selected disabled>
                                    Selecciona un turno
                                </option>

                                <option>Mañana</option>
                                <option>Tarde</option>
                                <option>Noche</option>
                            </select>
                        </div>

                        <button class="submit-btn">
                            Enviar postulación
                        </button>

                        <p class="form-note">
                            Tus datos están protegidos y serán utilizados únicamente para fines académicos.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>

        /* =========================
           HERO
        ========================= */

        .admision-hero{
            position: relative;
            overflow: hidden;
            padding: 80px 0;
            background: 
                radial-gradient(circle at top left, rgba(0, 255, 196, 0.15) 0%, transparent 40%),
                radial-gradient(circle at bottom right, rgba(0, 86, 198, 0.2) 0%, transparent 40%),
                linear-gradient(135deg, #01060f 0%, #002F6C 50%, #020813 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .hero-bg{
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at top right, rgba(0,255,170,.12), transparent 30%),
                radial-gradient(circle at bottom left, rgba(255,255,255,.05), transparent 35%);
        }

        .admision-hero-container{
            position: relative;
            z-index: 2;
            max-width: 1320px;
            margin: auto;
            padding: 0 64px;
            display: grid;
            grid-template-columns: 1.1fr .8fr;
            gap: 64px;
            align-items: center;
        }

        .hero-pill{
            display: inline-flex;
            padding: 8px 18px;
            border-radius: 999px;
            background: rgba(0,255,170,.08);
            border: 1px solid rgba(0,255,170,.25);
            color: #7CF3CD;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .6px;
            margin-bottom: 22px;
        }

        .admision-title{
            font-size: 56px;
            line-height: 1.05;
            color: white;
            margin-bottom: 22px;
            font-weight: 800;
        }

        .admision-title span{
            color: #6EE7B7;
        }

        .admision-desc{
            font-size: 16px;
            line-height: 1.8;
            color: rgba(255,255,255,.72);
            max-width: 640px;
            margin-bottom: 36px;
        }

        .hero-btns{
            display: flex;
            gap: 16px;
            margin-bottom: 40px;
        }

        .hero-mini-stats{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .mini-stat{
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.08);
            backdrop-filter: blur(10px);
            border-radius: 18px;
            padding: 20px;
        }

        .mini-stat strong{
            display: block;
            color: white;
            font-size: 24px;
            margin-bottom: 6px;
        }

        .mini-stat span{
            color: rgba(255,255,255,.65);
            font-size: 13px;
        }

        /* =========================
           CARD
        ========================= */

        .convocatoria-card{
            background: rgba(255,255,255,.02);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 28px;
            padding: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,.3);
        }

        .convocatoria-top{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 26px;
        }

        .convocatoria-badge{
            font-size: 14px;
            font-weight: 700;
            color: var(--texto-principal);
        }

        .convocatoria-status{
            background: rgba(0, 245, 180, 0.12);
            color: var(--verde-acento);
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            border: 1px solid rgba(0, 245, 180, 0.2);
        }

        .convocatoria-items{
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .convocatoria-item{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--borde);
        }

        .convocatoria-item span{
            font-size: 13px;
            color: var(--texto-secundario);
        }

        .convocatoria-item strong{
            font-size: 14px;
            color: var(--texto-principal);
        }

        .verde{
            color: var(--verde);
        }

        .convocatoria-footer{
            margin-top: 24px;
            background: rgba(0, 245, 180, 0.06);
            border: 1px solid rgba(0, 245, 180, 0.2);
            border-radius: 18px;
            padding: 18px;
            display: flex;
            gap: 14px;
        }

        .footer-icon{
            font-size: 26px;
        }

        .convocatoria-footer strong{
            color: var(--texto-principal);
            display: block;
            margin-bottom: 4px;
        }

        .convocatoria-footer p{
            color: var(--texto-secundario);
            font-size: 13px;
        }

        /* =========================
           SECTION
        ========================= */

        .admision-proceso,
        .admision-beneficios,
        .admision-form{
            padding: 90px 0;
        }

        .admision-requisitos{
            padding: 90px 0;
            background: var(--fondo-gris);
        }

        .timeline{
            display: grid;
            grid-template-columns: repeat(5,1fr);
            gap: 20px;
        }

        .timeline-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            padding: 28px;
            transition: .25s;
        }

        .timeline-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 16px 30px rgba(0, 245, 180, 0.05);
            border-color: rgba(0, 245, 180, 0.2);
        }

        .timeline-top{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .timeline-icon{
            width: 60px;
            height: 60px;
            border-radius: 18px;
            background: rgba(0, 245, 180, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .timeline-number{
            font-size: 32px;
            font-weight: 800;
            color: rgba(0,179,134,.25);
        }

        .timeline-title{
            font-size: 17px;
            font-weight: 700;
            color: var(--texto-principal);
            margin-bottom: 10px;
        }

        .timeline-desc{
            font-size: 14px;
            line-height: 1.7;
            color: var(--texto-secundario);
        }

        /* =========================
           REQUISITOS
        ========================= */

        .requisitos-grid{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 32px;
        }

        .req-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 28px;
            padding: 36px;
        }

        .left{
            text-align: left !important;
        }

        .req-list{
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 34px;
        }

        .req-item{
            display: flex;
            gap: 16px;
        }

        .req-check{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--verde);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            flex-shrink: 0;
        }

        .req-item strong{
            display: block;
            margin-bottom: 4px;
            color: var(--texto-principal);
        }

        .req-item span{
            font-size: 14px;
            color: var(--texto-secundario);
        }

        .req-alert{
            margin-top: 28px;
            display: flex;
            gap: 10px;
            background: rgba(245, 158, 11, 0.08);
            border: 1px solid rgba(245, 158, 11, 0.2);
            padding: 16px;
            border-radius: 16px;
            font-size: 14px;
            color: #FBBF24;
        }

        .turnos-grid{
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 34px;
        }

        .turno-card{
            border: 1px solid var(--borde);
            border-radius: 18px;
            padding: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .turno-left{
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .turno-icon{
            font-size: 28px;
        }

        .turno-left strong{
            display: block;
            margin-bottom: 4px;
            color: var(--texto-principal);
        }

        .turno-left span{
            font-size: 14px;
            color: var(--texto-secundario);
        }

        .turno-badge{
            background: rgba(0, 245, 180, 0.1);
            color: var(--verde-acento);
            border: 1px solid rgba(0, 245, 180, 0.2);
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .sede-box{
            margin-top: 26px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 20px;
            padding: 24px;
        }

        .sede-box h4{
            margin-bottom: 10px;
            color: var(--texto-principal);
        }

        .sede-box p{
            color: var(--texto-secundario);
            margin-bottom: 14px;
        }

        .sede-contacto{
            display: flex;
            flex-direction: column;
            gap: 8px;
            font-size: 14px;
            color: var(--texto-secundario);
        }

        /* =========================
           BENEFICIOS
        ========================= */

                .beneficio-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            padding: 32px;
        }

        .beneficio-icon{
            width: 68px;
            height: 68px;
            border-radius: 20px;
            background: rgba(0, 245, 180, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .beneficio-card h3{
            margin-bottom: 10px;
            color: var(--texto-principal);
        }

        .beneficio-card p{
            font-size: 14px;
            line-height: 1.7;
            color: var(--texto-secundario);
        }

        /* =========================
           FORM
         ========================= */

        .form-wrapper{
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 64px;
            align-items: start;
        }

        .form-beneficios{
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-top: 34px;
        }

        .beneficio-item{
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 500;
            color: var(--texto-principal);
        }

        .beneficio-item div{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--verde);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }

        .form-card{
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 28px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,.3);
        }

        .form-card h3{
            font-size: 24px;
            margin-bottom: 28px;
            color: var(--texto-principal);
        }

        .input-group{
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 22px;
        }

        .input-group label{
            font-size: 14px;
            font-weight: 600;
            color: var(--texto-principal);
        }

        .input-group input,
        .input-group select{
            width: 100%;
            border: 1.5px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 14px 16px;
            outline: none;
            font-family: inherit;
            font-size: 14px;
            transition: .2s;
            background: rgba(255, 255, 255, 0.03);
            color: white;
        }

        .input-group select option{
            color: #020813 !important;
            background-color: #ffffff !important;
        }

        .input-group input:focus,
        .input-group select:focus{
            border-color: var(--verde);
        }

        .form-row{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 18px;
        }

        .submit-btn{
            width: 100%;
            border: none;
            border-radius: 14px;
            padding: 16px;
            background: linear-gradient(135deg,#00B386,#009E77);
            color: white;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: .25s;
            margin-top: 10px;
        }

        .submit-btn:hover{
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0,179,134,.25);
        }

        .form-note{
            margin-top: 14px;
            text-align: center;
            font-size: 12px;
            color: var(--texto-secundario);
            line-height: 1.6;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px){

            .timeline,
            .beneficios-grid{
                grid-template-columns: repeat(2,1fr);
            }

            .admision-hero-container,
            .form-wrapper,
            .requisitos-grid{
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 768px){

            .admision-hero{
                padding: 64px 0;
            }

            .admision-hero-container{
                padding: 0 20px;
                gap: 48px;
            }

            .admision-title{
                font-size: 34px;
            }

            .hero-btns{
                flex-direction: column;
            }

            .hero-mini-stats{
                grid-template-columns: repeat(2,1fr);
            }

            .timeline,
            .beneficios-grid{
                grid-template-columns: 1fr;
            }

            .form-row{
                grid-template-columns: 1fr;
            }

            .form-card{
                padding: 28px 22px;
            }

        }

    </style>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // 1. Hero Load Entry Animation
        const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
        tl.fromTo(".hero-pill", { opacity: 0, y: -20 }, { opacity: 1, y: 0, duration: 0.8 })
          .fromTo(".admision-title", { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1 }, "-=0.6")
          .fromTo(".admision-desc", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
          .fromTo(".hero-btns .btn-primary, .hero-btns .btn-secondary", { opacity: 0, scale: 0.95 }, { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15 }, "-=0.5")
          .fromTo(".mini-stat", { opacity: 0, y: 15 }, { opacity: 1, y: 0, duration: 0.6, stagger: 0.1 }, "-=0.4")
          .fromTo(".convocatoria-card", { opacity: 0, x: 50 }, { opacity: 1, x: 0, duration: 0.8 }, "-=0.8");

        // 2. Stats Dynamic Counter
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

        // 3. Staggered reveal for timeline steps
        gsap.fromTo(".timeline-card",
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.15,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".timeline",
                    start: "top 85%"
                }
            }
        );

        // 4. Staggered Requisitos cards entrance
        gsap.fromTo(".req-card",
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".requisitos-grid",
                    start: "top 85%"
                }
            }
        );

        // 5. Staggered Turnos cards entry
        gsap.fromTo(".turno-card",
            { opacity: 0, x: -20 },
            {
                opacity: 1,
                x: 0,
                duration: 0.5,
                stagger: 0.1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".turnos-grid",
                    start: "top 85%"
                }
            }
        );

        // 6. Staggered Beneficios cards entry
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

        // 7. Form Wrapper entry and Input field focus animations
        gsap.fromTo(".form-wrapper",
            { opacity: 0, scale: 0.95 },
            {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".form-wrapper",
                    start: "top 90%"
                }
            }
        );

        const formInputs = document.querySelectorAll(".input-group input, .input-group select");
        formInputs.forEach(input => {
            input.addEventListener("focus", () => {
                gsap.to(input, { scale: 1.015, borderColor: "#00C896", duration: 0.3 });
            });
            input.addEventListener("blur", () => {
                gsap.to(input, { scale: 1, borderColor: "rgba(255,255,255,0.08)", duration: 0.3 });
            });
        });
    });
    </script>

</x-layouts.app>