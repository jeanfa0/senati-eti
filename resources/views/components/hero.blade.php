<section class="hero">
    <div class="hero-content">
        <div class="hero-left">
            <div class="hero-pill">Escuela de Tecnologías de la Información</div>
            <h1 class="hero-title">
                Donde hay tecnología,<br>
                hay un experto de SENATI<br>
                que le da <span class="hero-acento">vida</span>
            </h1>
            <p class="hero-sub">
                Certificación progresiva con título a nombre de la Nación · Metodología práctica SENATI-EMPRESA
            </p>
            <div class="hero-btns">
                <a href="#carreras" class="btn-primary">Ver carreras</a>
                <a href="#" class="btn-outline">Más información</a>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-dots">
                @for ($i = 0; $i < 25; $i++)
                    <div class="hero-dot"></div>
                @endfor
            </div>
            <div class="hero-card-float">
                <span class="hero-card-badge">10 Carreras disponibles</span>
                <span class="hero-card-loc">📍 Lima Norte</span>
            </div>
        </div>
    </div>
    <div class="hero-partners">
        @foreach (['Microsoft', 'Cisco', 'IBM', 'Adobe', 'Oracle', 'SAP'] as $partner)
            <span class="partner-logo">{{ $partner }}</span>
        @endforeach
    </div>
</section>