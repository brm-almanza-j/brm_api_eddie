<a href="{{ route('marcas.create') }}" class="btn-active">Agregar nueva Marca</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Cliente</th>
        <th scope="col">Cliente Activo</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($marcas as $mar)
        <tr>
            <td>{{ $mar->id }}</td>
            <td>{{ $mar->nombre }}</td>
            <td>{{ $mar->direccion }}</td>
            <td>{{ $mar->telefono }}</td>
            <td>{{ $mar->correo }}</td>
            <td>{{ $mar->ciudad->nombre }}</td>
            <td>{{ $mar->cliente->nombre }}</td>
            <td>{{ $mar->activo }}</td>
            <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>