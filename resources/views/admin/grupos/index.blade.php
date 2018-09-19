<a href="{{ route('grupos.create') }}" class="btn-active">Agregar nuevo Grupo</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Grupo</th>
        <th scope="col">Area</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($grupos as $gru)
        <tr>
            <td>{{ $gru->id }}</td>
            <td>{{ $gru->nombre }}</td>
            <td>{{ $gru->area->nombre }}</td>
            <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>