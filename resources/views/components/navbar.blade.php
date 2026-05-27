<nav class="navbar">

    {{-- LOGO --}}
    <a href="/" class="navbar-logo">
        <div class="navbar-logo-circle">S</div>

        <div class="navbar-logo-content">
            <span class="navbar-logo-title">ETI SENATI</span>
            <span class="navbar-logo-sub">Escuela de Tecnologías</span>
        </div>
    </a>

    {{-- LINKS --}}
    @php
        $links = [
            ['url' => '/', 'label' => 'Inicio'],
            ['url' => '/carreras', 'label' => 'Carreras'],
            ['url' => '/nosotros', 'label' => 'Nosotros'],
            ['url' => '/admision', 'label' => 'Admisión'],
            ['url' => '/contacto', 'label' => 'Contacto'],
        ];
    @endphp

    <ul class="navbar-links">

        @foreach ($links as $link)
            <li>
                <a href="{{ $link['url'] }}"
                   class="{{ request()->is(trim($link['url'], '/')) || request()->is($link['url']) ? 'active' : '' }}">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach

    </ul>

    {{-- ACTIONS --}}
    <div class="navbar-actions">

        <a href="/admision" class="navbar-cta">
            Postula ahora
        </a>

        <button class="navbar-hamburger" aria-label="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

</nav>

<style>
    .navbar{
        position: sticky;
        top: 0;
        z-index: 1000;

        display:flex;
        align-items:center;
        justify-content:space-between;

        padding: 18px 64px;
        background: rgba(10,34,64,.88);

        backdrop-filter: blur(14px);
        border-bottom: 1px solid rgba(255,255,255,.06);
    }

    /* ── LOGO ── */

    .navbar-logo{
        display:flex;
        align-items:center;
        gap:14px;
        text-decoration:none;
        flex-shrink:0;
    }

    .navbar-logo-circle{
        width:48px;
        height:48px;

        display:flex;
        align-items:center;
        justify-content:center;

        border-radius:14px;

        background: linear-gradient(135deg,#00B386,#009E77);
        color:#fff;

        font-size:22px;
        font-weight:800;

        box-shadow: 0 10px 24px rgba(0,179,134,.25);
    }

    .navbar-logo-content{
        display:flex;
        flex-direction:column;
        line-height:1.1;
    }

    .navbar-logo-title{
        color:#fff;
        font-size:17px;
        font-weight:800;
        letter-spacing:.3px;
    }

    .navbar-logo-sub{
        color:rgba(255,255,255,.6);
        font-size:12px;
        font-weight:500;
    }

    /* ── LINKS ── */

    .navbar-links{
        display:flex;
        align-items:center;
        gap:10px;
        list-style:none;
    }

    .navbar-links a{
        position:relative;

        display:flex;
        align-items:center;
        justify-content:center;

        padding:10px 16px;
        border-radius:10px;

        color:rgba(255,255,255,.72);
        text-decoration:none;
        font-size:14px;
        font-weight:600;

        transition:.25s ease;
    }

    .navbar-links a:hover{
        color:#fff;
        background:rgba(255,255,255,.06);
    }

    .navbar-links a.active{
        color:#fff;
        background:rgba(255,255,255,.08);
    }

    .navbar-links a.active::after{
        content:'';
        position:absolute;
        bottom:-6px;
        left:50%;

        width:18px;
        height:3px;

        border-radius:999px;
        background:var(--verde-acento);

        transform:translateX(-50%);
    }

    /* ── ACTIONS ── */

    .navbar-actions{
        display:flex;
        align-items:center;
        gap:14px;
    }

    .navbar-cta{
        display:flex;
        align-items:center;
        justify-content:center;

        padding:12px 20px;
        border-radius:12px;

        background: linear-gradient(135deg,#00B386,#009E77);
        color:#fff;

        text-decoration:none;
        font-size:14px;
        font-weight:700;

        transition:.25s ease;
        box-shadow: 0 10px 24px rgba(0,179,134,.22);
    }

    .navbar-cta:hover{
        transform: translateY(-2px);
        box-shadow: 0 14px 28px rgba(0,179,134,.32);
    }

    /* ── HAMBURGER ── */

    .navbar-hamburger{
        display:none;
        flex-direction:column;
        gap:5px;

        background:none;
        border:none;
        cursor:pointer;
    }

    .navbar-hamburger span{
        width:24px;
        height:2px;
        border-radius:999px;
        background:#fff;
    }

    /* ── RESPONSIVE ── */

    @media (max-width: 992px){

        .navbar{
            padding:16px 20px;
        }

        .navbar-links{
            display:none;
        }

        .navbar-cta{
            display:none;
        }

        .navbar-hamburger{
            display:flex;
        }

        .navbar-logo-circle{
            width:42px;
            height:42px;
            font-size:18px;
        }

        .navbar-logo-title{
            font-size:15px;
        }

        .navbar-logo-sub{
            font-size:11px;
        }
    }
</style>