<a href="{{ route('ciudades.create') }}" class="btn-active">Agregar nueva Ciudad</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Regional<th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($city as $ciudad)
          <tr>
              <td>{{ $ciudad->id }}</td>
              <td>{{ $ciudad->fecha }}</td>
              <td>{{ $ciudad->nombre }}</td>
              <td>{{ $ciudad->regional->nombre }}</td>
              <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>