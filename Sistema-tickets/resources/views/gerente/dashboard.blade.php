@extends('layouts.app')
@section('title', 'Panel Gerente')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-success">📊 Panel de Gerencia</h2>
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-primary text-center">
                <div class="card-body">
                    <h5>Total</h5>
                    <h2 class="text-primary">{{ $resumen['total'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning text-center">
                <div class="card-body">
                    <h5>Pendientes</h5>
                    <h2 class="text-warning">{{ $resumen['pendientes'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-info text-center">
                <div class="card-body">
                    <h5>En Curso</h5>
                    <h2 class="text-info">{{ $resumen['en_curso'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger text-center">
                <div class="card-body">
                    <h5>Críticos</h5>
                    <h2 class="text-danger">{{ $resumen['criticos'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('gerente.reportes') }}" class="btn btn-success">Ver Reportes Completos</a>
    <a href="{{ route('gerente.tickets.index') }}" class="btn btn-outline-primary ms-2">Ver Todos los Tickets</a>
</div>
@endsection