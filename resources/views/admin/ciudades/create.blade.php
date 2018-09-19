{!! Form::open(['route' => 'ciudades.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aqui la regional', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::select('id_regional', $select_regionales ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}