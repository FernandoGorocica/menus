@extends('layouts.app')

@section('title', 'Sobre Nosotros')

@section('content')
<div class="about-section">
    <h1>Quiénes Somos</h1>
    
    <div class="about-content">
        <img src="https://via.placeholder.com/400x300" alt="Nuestro equipo" class="about-image">
        
        <div class="about-text">
            <p>Somos una empresa comprometida con ofrecer soluciones innovadoras desde 2020. Nuestra misión es proporcionar servicios de alta calidad que superen las expectativas de nuestros clientes.</p>
            
            <h2>Nuestros Valores</h2>
            <ul class="values-list">
                <li>✅ Innovación constante</li>
                <li>✅ Transparencia en procesos</li>
                <li>✅ Compromiso con la excelencia</li>
                <li>✅ Sostenibilidad ambiental</li>
            </ul>
        </div>
    </div>

    <div class="team-section">
        <h2>Conoce al Equipo</h2>
        <div class="team-members">
            <div class="member">
                <h3>Juan Pérez</h3>
                <p>CEO y Fundador</p>
            </div>
            <div class="member">
                <h3>María Gómez</h3>
                <p>Directora de Tecnología</p>
            </div>
        </div>
    </div>
</div>
@endsection