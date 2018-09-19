{!! Form::open(['route' => 'areas.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí su nombre', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Ciudad') !!}
        {!! Form::select('id_ciudad', $select[0] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Usuario Jefe') !!}
        {!! Form::select('id_usuario_jefe', $select[1] ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}