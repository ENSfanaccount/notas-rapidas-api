@extends('layouts.app')
@section('title', 'Gestión de Usuarios')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">👥 Usuarios del Sistema</h2>
    <table class="table table-hover bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th><th>Email</th><th>Rol actual</th><th>Cambiar Rol</th><th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $u)
            <tr>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td><span class="badge bg-secondary">{{ $u->rol }}</span></td>
                <td>
                    <form action="{{ route('admin.usuarios.cambiar-rol', $u) }}" method="POST" class="d-flex gap-2">
                        @csrf @method('PATCH')
                        <select name="rol" class="form-select form-select-sm">
                            @foreach(['admin','gerente','usuario'] as $r)
                                <option value="{{ $r }}" {{ $u->rol === $r ? 'selected' : '' }}>{{ ucfirst($r) }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-primary">Guardar</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('admin.usuarios.destroy', $u) }}" method="POST" onsubmit="return confirm('¿Eliminar usuario?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection