@props(['carrera'])

<a href="/carrera/{{ $carrera['slug'] }}" class="carrera-card" style="display: flex; flex-direction: column; height: 100%; border: 1px solid rgba(255, 255, 255, 0.07); border-radius: 20px; overflow: hidden; text-decoration: none; background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(16px); box-shadow: 0 8px 32px rgba(0,0,0,0.2); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
    <div class="carrera-card-image-wrap" style="position: relative; height: 190px; overflow: hidden;">
        <img src="{{ $carrera['imagen'] }}" alt="{{ $carrera['nombre'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
        <div class="carrera-card-top-bar" style="position: absolute; bottom: 0; left: 0; right: 0; height: 4px; background: {{ $carrera['color'] }}; box-shadow: 0 0 12px {{ $carrera['color'] }}"></div>
        
        <div class="carrera-icon-badge" style="position: absolute; top: 16px; right: 16px; width: 44px; height: 44px; border-radius: 12px; background: rgba(2, 8, 19, 0.85); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; backdrop-filter: blur(8px); color: {{ $carrera['color'] }}; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
            <span style="display: flex; align-items: center; justify-content: center; width: 22px; height: 22px; fill: currentColor;">{!! $carrera['icono'] !!}</span>
        </div>
    </div>
    
    <div class="carrera-card-body" style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
        <h3 class="carrera-nombre" style="font-size: 1.2rem; font-weight: 700; margin-bottom: 12px; color: #FFFFFF; line-height: 1.4; font-family: var(--font-display);">{{ $carrera['nombre'] }}</h3>
        <p class="carrera-desc" style="font-size: 0.92rem; color: #94A3B8; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">{{ $carrera['descripcion'] }}</p>
        <div class="carrera-footer" style="display: flex; align-items: center; justify-content: space-between; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.06); margin-top: auto;">
            <span class="badge-años" style="background: rgba(255,255,255,0.05); color: #E2E8F0; font-size: 0.8rem; font-weight: 600; padding: 5px 14px; border-radius: 99px; border: 1px solid rgba(255,255,255,0.05);">3 años</span>
            <span class="carrera-link" style="color: {{ $carrera['color'] }}; font-weight: 700; font-size: 0.92rem; text-shadow: 0 0 10px rgba(0, 245, 180, 0.1);">Ver detalle →</span>
        </div>
    </div>
</a>