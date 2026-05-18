@extends('layouts.app')
@section('title', 'Todos los Tickets')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">🎫 Todos los Tickets</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <table class="table table-hover bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Categoría</th>
                <th>Urgencia</th>
                <th>Status</th>
                <th>Técnico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td><code>{{ $ticket->numero_reporte }}</code></td>
                <td>{{ $ticket->cliente_nombre }}</td>
                <td>{{ ucfirst($ticket->categoria) }}</td>
                <td>{{ ucfirst($ticket->nivel_urgencia) }}</td>
                <td>
                    <span class="badge bg-secondary text-dark">
                        {{ ucfirst(str_replace('_', ' ', $ticket->status)) }}
                    </span>
                </td>
                <td>{{ $ticket->tecnico_asignado ?? '-' }}</td>
                <td>
                    @if(auth()->user()->rol == 'admin' || auth()->user()->rol == 'gerente')
                        <form action="{{ route('tickets.close', $ticket) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('¿Cerrar este ticket?')">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-sm btn-outline-success">Cerrar</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection