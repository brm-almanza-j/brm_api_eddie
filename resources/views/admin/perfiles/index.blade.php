<a href="{{ route('perfiles.create') }}" class="btn-active">Agregar nuevo perfil</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Perfil</th>
        <th scope="col">Grupo</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($perfiles as $perf)
        <tr>
            <td>{{ $perf->id }}</td>
            <td>{{ $perf->nombre }}</td>
            <td>{{ $perf->grupo->nombre }}</td>
            <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>