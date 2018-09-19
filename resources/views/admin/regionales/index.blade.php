<link href="{{ asset('css/bootstrap.min/css') }}" rel="stylesheet">
<a href="{{ route('regionales.create') }}" class="btn-active">Agregar nueva regional</a><hr>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Regional</th>
        <td scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reg as $regional)
        <tr>
          <td>{{ $regional->id }}</td>
          <td>{{ $regional->fecha }}</td>
          <td>{{ $regional->nombre }}</td>
          <td><a href="{{ route('regionales.edit', $regional->id) }}" class="btn btn-primary">Editar</a>
          <a href="{{ route('regionales.destroy', $regional->id) }}" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>