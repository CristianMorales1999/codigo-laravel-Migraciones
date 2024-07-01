
<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home')}}"><a href="{{ route('home') }}">Home</a></th>
        <th scope="col" class="{{ setActivo('nosotros')}}"><a href="{{ route('nosotros') }}">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios.index') }} {{ setActivo('servicios.show') }}"><a href="{{ route('servicios.index') }}">Servicios</a></th>
        <th scope="col" class="{{ setActivo('contacto')}}"><a href="{{ route('contacto') }}">Contacto</a></th>
    </tr>
    <tr>
        <td colspan="4">
            <!-- Agregamos la directiva para agregar contenido dinamico-->
            @yield('content')
        </td>
    </tr>
</thead>
