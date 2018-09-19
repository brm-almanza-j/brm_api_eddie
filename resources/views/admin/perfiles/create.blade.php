{!! Form::open(['route' => 'perfiles.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el perfil', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Grupo') !!}
        {!! Form::select('id_grupo', $select_grupo ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}