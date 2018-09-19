<a href="{{ route('franjashorarias.create') }}" class="btn-active">Agregar nueva Franja Horaria</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Hora Inicio</th>
        <th scope="col">Hora Fin</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($franja as $fra_hor)
          <tr>
              <td>{{ $fra_hor->id }}</td>
              <td>{{ $fra_hor->franja_horaria }}</td>
              <td>{{ $fra_hor->hora_inicio }}</td>
              <td>{{ $fra_hor->hora_fin }}</td>
              <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>