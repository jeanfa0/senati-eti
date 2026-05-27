<footer class="footer">

    @php
        $footerLinks = [
            [
                'titulo' => 'Institución',
                'links' => [
                    ['label' => 'Inicio', 'url' => '/'],
                    ['label' => 'Nosotros', 'url' => '/nosotros'],
                    ['label' => 'Carreras', 'url' => '/carreras'],
                    ['label' => 'Admisión', 'url' => '/admision'],
                ]
            ],
            [
                'titulo' => 'Carreras TI',
                'links' => [
                    ['label' => 'Desarrollo de Software', 'url' => '/carrera/desarrollo-software'],
                    ['label' => 'Ciberseguridad', 'url' => '/carrera/ciberseguridad'],
                    ['label' => 'Cloud Computing', 'url' => '/carrera/cloud-computing'],
                    ['label' => 'Diseño Web', 'url' => '/carrera/diseno-desarrollo-web'],
                ]
            ],
            [
                'titulo' => 'Soporte',
                'links' => [
                    ['label' => 'Contacto', 'url' => '/contacto'],
                    ['label' => 'Admisiones', 'url' => '/admision'],
                    ['label' => 'Sedes y Horarios', 'url' => '/contacto'],
                ]
            ],
        ];
    @endphp

    {{-- TOP --}}
    <div class="footer-top">

        <div class="footer-brand">

            <a href="/" class="footer-logo">
                <div class="footer-logo-circle">S</div>

                <div>
                    <h3>ETI SENATI</h3>
                    <span>Escuela de Tecnologías de la Información</span>
                </div>
            </a>

            <p class="footer-desc">
                SENATI ETI forma profesionales técnicos especializados en tecnologías
                de la información mediante una metodología práctica orientada a las
                necesidades reales del sector empresarial y tecnológico del Perú.
            </p>

            <div class="footer-social">

                <a href="#" aria-label="Facebook">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.5-3.88 3.77-3.88 1.1 0 2.24.2 2.24.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.77l-.44 2.89h-2.33v6.99A10 10 0 0022 12z"/>
                    </svg>
                </a>

                <a href="#" aria-label="Instagram">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm0 2h10c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3zm11.5 1a1.5 1.5 0 100 3 1.5 1.5 0 000-3zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z"/>
                    </svg>
                </a>

                <a href="#" aria-label="YouTube">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.8 8s-.2-1.5-.8-2.1c-.8-.8-1.7-.8-2.1-.9C15.9 4.8 12 4.8 12 4.8h0s-3.9 0-6.9.2c-.4 0-1.3 0-2.1.9C2.4 6.5 2.2 8 2.2 8S2 9.7 2 11.3v1.5C2 14.3 2.2 16 2.2 16s.2 1.5.8 2.1c.8.8 1.9.8 2.4.9 1.8.2 6.6.2 6.6.2s3.9 0 6.9-.2c.4 0 1.3 0 2.1-.9.6-.6.8-2.1.8-2.1s.2-1.7.2-3.2v-1.5C22 9.7 21.8 8 21.8 8zM10 15.3V8.7l6 3.3-6 3.3z"/>
                    </svg>
                </a>

            </div>

        </div>

        {{-- LINKS --}}
        <div class="footer-links-wrap">

            @foreach ($footerLinks as $grupo)

                <div class="footer-links">

                    <h4>{{ $grupo['titulo'] }}</h4>

                    @foreach ($grupo['links'] as $link)
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @endforeach

                </div>

            @endforeach

        </div>

    </div>



    {{-- CONTACT --}}
    <div class="footer-contact">

        <div class="footer-chip">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 8V5z"/>
            </svg>

            988-066-554 / 922-790-223
        </div>

        <div class="footer-chip">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>

            eti-limanorte@senati.edu.pe
        </div>

        <div class="footer-chip">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            </svg>

            Jr. Mártir Olaya 129 · Independencia
        </div>

    </div>

    {{-- BOTTOM --}}
    <div class="footer-bottom">

        <p>
            © {{ date('Y') }} SENATI — Escuela de Tecnologías de la Información · Lima Norte
        </p>

        <div class="footer-bottom-links">
            <a href="#">Política de privacidad</a>
            <a href="#">Términos y condiciones</a>
        </div>

    </div>

</footer>

<style>
    .footer{
        background: linear-gradient(180deg, #091222 0%, #030712 100%);
        color:#fff;
        padding:90px 64px 40px;
        margin-top:0px;
        border-top: 1px solid rgba(0, 245, 180, 0.1);
        position: relative;
    }
    
    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 10%;
        right: 10%;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--verde-acento), transparent);
        opacity: 0.3;
    }

    /* ── TOP ── */

    .footer-top{
        display:grid;
        grid-template-columns:1.2fr 1fr;
        gap:64px;
        padding-bottom:56px;
        border-bottom:1px solid rgba(255,255,255,.06);
    }

    .footer-logo{
        display:flex;
        align-items:center;
        gap:14px;
        text-decoration:none;
        margin-bottom:22px;
    }

    .footer-logo-circle{
        width:52px;
        height:52px;

        display:flex;
        align-items:center;
        justify-content:center;

        border-radius:16px;

        background:linear-gradient(135deg,#00B386,#00F5B4);
        color:#fff;

        font-size:22px;
        font-weight:800;
        box-shadow: 0 0 20px rgba(0, 245, 180, 0.3);
    }

    .footer-logo h3{
        font-size:22px;
        font-weight:800;
        color:#fff;
        margin-bottom:2px;
        font-family: 'Outfit', sans-serif;
    }

    .footer-logo span{
        color:rgba(255,255,255,.6);
        font-size:13px;
    }

    .footer-desc{
        max-width:520px;
        color:rgba(255,255,255,.68);
        line-height:1.8;
        font-size:14px;
        margin-bottom:28px;
    }

    /* ── SOCIAL ── */

    .footer-social{
        display:flex;
        gap:14px;
    }

    .footer-social a{
        width:44px;
        height:44px;

        display:flex;
        align-items:center;
        justify-content:center;

        border-radius:12px;

        background:rgba(255,255,255,.04);
        color:#fff;
        border: 1px solid rgba(255, 255, 255, 0.08);

        transition:.25s cubic-bezier(.4,0,.2,1);
    }

    .footer-social a:hover{
        background:var(--verde);
        border-color: var(--verde-acento);
        box-shadow: 0 0 15px rgba(0, 245, 180, 0.35);
        transform:translateY(-4px) scale(1.05);
    }

    .footer-social svg{
        width:18px;
        height:18px;
    }

    /* ── LINKS ── */

    .footer-links-wrap{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:28px;
    }

    .footer-links h4{
        font-size:16px;
        margin-bottom:18px;
        color:#fff;
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
    }

    .footer-links a{
        display:block;
        color:rgba(255,255,255,.65);
        text-decoration:none;
        font-size:14px;
        margin-bottom:12px;
        transition:.2s;
    }

    .footer-links a:hover{
        color:#fff;
        transform:translateX(6px);
    }

    /* ── STATS ── */

    .footer-stats{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:20px;

        margin:48px 0;
    }

    .footer-stat{
        background:rgba(255,255,255,.04);
        border:1px solid rgba(255,255,255,.06);

        border-radius:18px;
        padding:24px;
    }

    .footer-stat strong{
        display:block;
        font-size:28px;
        color:var(--verde-acento);
        margin-bottom:6px;
    }

    .footer-stat span{
        font-size:14px;
        color:rgba(255,255,255,.65);
    }

    /* ── CONTACT ── */

    .footer-contact{
        display:flex;
        flex-wrap:wrap;
        gap:14px;

        margin-bottom:36px;
    }

    .footer-chip{
        display:flex;
        align-items:center;
        gap:10px;

        padding:12px 18px;

        background:rgba(255,255,255,.05);
        border:1px solid rgba(255,255,255,.08);

        border-radius:999px;

        color:rgba(255,255,255,.82);
        font-size:14px;
    }

    .footer-chip svg{
        width:18px;
        height:18px;
        flex-shrink:0;
    }

    /* ── BOTTOM ── */

    .footer-bottom{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:20px;

        padding-top:24px;
        border-top:1px solid rgba(255,255,255,.08);
    }

    .footer-bottom p{
        color:rgba(255,255,255,.55);
        font-size:13px;
    }

    .footer-bottom-links{
        display:flex;
        gap:18px;
    }

    .footer-bottom-links a{
        color:rgba(255,255,255,.55);
        text-decoration:none;
        font-size:13px;
        transition:.2s;
    }

    .footer-bottom-links a:hover{
        color:#fff;
    }

    /* ── RESPONSIVE ── */

    @media (max-width: 992px){

        .footer{
            padding:56px 20px 24px;
        }

        .footer-top{
            grid-template-columns:1fr;
            gap:40px;
        }

        .footer-links-wrap{
            grid-template-columns:repeat(2,1fr);
        }

        .footer-stats{
            grid-template-columns:1fr;
        }

        .footer-bottom{
            flex-direction:column;
            align-items:flex-start;
        }
    }

    @media (max-width: 640px){

        .footer-links-wrap{
            grid-template-columns:1fr;
        }

        .footer-contact{
            flex-direction:column;
        }

        .footer-chip{
            width:100%;
            justify-content:flex-start;
        }

        .footer-bottom-links{
            flex-direction:column;
            gap:10px;
        }
    }
</style>