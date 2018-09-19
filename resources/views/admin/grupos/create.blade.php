{!! Form::open(['route' => 'grupos.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el nombre del grupo', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Area') !!}
        {!! Form::select('id_area', $select_area ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}