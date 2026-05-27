<section class="cert-section">
    <div class="section-container">
        <div class="section-header">
            <span class="section-label">RUTA DE APRENDIZAJE</span>
            <h2 class="section-title">Certificación progresiva</h2>
            <p class="section-sub">Ejemplo: Desarrollo de Software</p>
        </div>
        <div class="cert-timeline">
            @foreach ([
                ['sem' => 'II Sem', 'nombre' => 'Asistente de Analista de Sistemas'],
                ['sem' => 'III Sem', 'nombre' => 'Analista de Sistemas'],
                ['sem' => 'IV Sem', 'nombre' => 'Administrador de Base de Datos'],
                ['sem' => 'V Sem', 'nombre' => 'Desarrollador de Aplicaciones'],
                ['sem' => 'VI Sem', 'nombre' => 'Desarrollador de Aplicaciones Web', 'final' => true],
            ] as $i => $paso)
                <div class="cert-paso">
                    <div class="cert-numero">{{ $i + 1 }}</div>
                    <div class="cert-info">
                        <span class="cert-sem">{{ $paso['sem'] }}</span>
                        <span class="cert-nombre">{{ $paso['nombre'] }}</span>
                        @if (!empty($paso['final']))
                            <span class="cert-badge-final">🎓 Titulación</span>
                        @endif
                    </div>
                </div>
                @if ($i < 4)
                    <div class="cert-conector">→</div>
                @endif
            @endforeach
        </div>
    </div>
</section>