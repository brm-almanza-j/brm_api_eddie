<a href="{{ route('usuarios.create') }}" class="btn-active">Agregar nuevo Usuario</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Priv. Administrador</th>
        <th scope="col">Usuario Activo</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($usuarios as $us)
        <tr>
            <td>{{ $us->id }}</td>
            <td>{{ $us->usuario }}</td>
            <td>{{ $us->nombre }}</td>
            <td>{{ $us->correo }}</td>
            <td>{{ $us->priv_admin }}</td>
            <td>{{ $us->activo }}</td>
            <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>