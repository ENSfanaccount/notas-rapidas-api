@extends('layouts.app')
@section('title', 'Todos los Tickets')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">🎫 Todos los Tickets</h2>
    <table class="table table-hover bg-white shadow-sm">
        <thead class="table-dark">
            <tr><th>#</th><th>Cliente</th><th>Categoría</th><th>Urgencia</th><th>Status</th><th>Técnico</th></tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td><code>{{ $ticket->numero_reporte }}</code></td>
                <td>{{ $ticket->cliente_nombre }}</td>
                <td>{{ ucfirst($ticket->categoria) }}</td>
                <td>{{ ucfirst($ticket->nivel_urgencia) }}</td>
                <td><span class="badge bg-secondary">{{ $ticket->status }}</span></td>
                <td>{{ $ticket->tecnico_asignado ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection