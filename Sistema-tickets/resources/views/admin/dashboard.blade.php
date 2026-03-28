@extends('layouts.app')
@section('title', 'Panel Administrador')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-primary">🛡️ Panel de Administración</h2>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary text-center">
                <div class="card-body">
                    <h5>Total Tickets</h5>
                    <h2>{{ $estadisticas['total'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning text-center">
                <div class="card-body">
                    <h5>Pendientes</h5>
                    <h2>{{ $estadisticas['pendientes'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info text-center">
                <div class="card-body">
                    <h5>En Curso</h5>
                    <h2>{{ $estadisticas['en_curso'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success text-center">
                <div class="card-body">
                    <h5>Finalizados</h5>
                    <h2>{{ $estadisticas['finalizados'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('admin.tickets.index') }}" class="btn btn-primary">Ver Todos los Tickets</a>
        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Gestionar Usuarios</a>
    </div>
</div>
@endsection