@extends('layouts.app')
@section('title', 'Reportes')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">📈 Reportes del Sistema</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">Tickets por Categoría</div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead><tr><th>Categoría</th><th>Total</th></tr></thead>
                        <tbody>
                            @foreach($porCategoria as $item)
                            <tr>
                                <td>{{ ucfirst($item->categoria) }}</td>
                                <td><span class="badge bg-primary">{{ $item->total }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-danger text-white">Tickets por Urgencia</div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead><tr><th>Urgencia</th><th>Total</th></tr></thead>
                        <tbody>
                            @foreach($porUrgencia as $item)
                            <tr>
                                <td>{{ ucfirst($item->nivel_urgencia) }}</td>
                                <td><span class="badge bg-danger">{{ $item->total }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection