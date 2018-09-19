<a href="{{ route('estados.create') }}" class="btn-active">Agregar nueva Estado</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estados</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($estados as $est)
          <tr>
              <td>{{ $est->id }}</td>
              <td>{{ $est->fecha }}</td>
              <td>{{ $est->estado }}</td>
              <td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>