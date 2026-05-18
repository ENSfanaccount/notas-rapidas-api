<footer>
 @php
 $anio = date('Y');
 $autor = "Felix Neder"; 
 @endphp
 <p> FrikiFest &copy; {{ $anio }} — Desarrollado por <strong>{{ $autor }}</strong></p>
 <p>Práctica de Blade Templates | Laravel 12</p>
</footer>