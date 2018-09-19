<a href="{{ route('areas.create') }}" class="btn-active">Agregar nueva Area</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Area</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Usuario Jefe</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($areas as $are)
        <tr>
            <td>{{ $are->id }}</td>
            <td>{{ $are->nombre }}</td>
            <td>{{ $are->ciudad->nombre }}</td>
            <td>{{ $are->usuario_jefe->nombre }}</td>
            <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>