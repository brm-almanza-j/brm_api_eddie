<a href="{{ route('clientes.create') }}" class="btn-active">Agregar nuevo Cliente</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Cliente Activo</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clientes as $cli)
          <tr>
              <td>{{ $cli->id }}</td>
              <td>{{ $cli->nombre }}</td>
              <td>{{ $cli->direccion }}</td>
              <td>{{ $cli->telefono }}</td>
              <td>{{ $cli->correo }}</td>
              <td>{{ $cli->ciudad->nombre }}</td>
              <td>{{ $cli->activo }}</td>
              <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>