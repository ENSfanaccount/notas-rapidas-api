@extends('layouts.app')
@section('title', 'Mis Tickets')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>🎫 Mis Tickets</h2>
        <a href="{{ route('usuario.tickets.create') }}" class="btn btn-primary">+ Nuevo Ticket</a>
    </div>
    @if($tickets->isEmpty())
        <div class="alert alert-info">No tienes tickets aún. <a href="{{ route('usuario.tickets.create') }}">Crea uno.</a></div>
    @else
    <table class="table table-hover bg-white shadow-sm">
        <thead class="table-dark">
            <tr><th>#</th><th>Descripción</th><th>Categoría</th><th>Urgencia</th><th>Status</th><th></th></tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td><code>{{ $ticket->numero_reporte }}</code></td>
                <td>{{ $ticket->descripcion_corta }}</td>
                <td>{{ ucfirst($ticket->categoria) }}</td>
                <td>{{ ucfirst($ticket->nivel_urgencia) }}</td>
                <td><span class="badge bg-secondary">{{ $ticket->status }}</span></td>
                <td><a href="{{ route('usuario.tickets.show', $ticket) }}" class="btn btn-sm btn-outline-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection