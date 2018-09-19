{!! Form::open(['route' => 'franjashorarias.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Titulo') !!}
        {!! Form::text('franja_horaria', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el titulo de la franja horaria', 'required']) !!}
    </div>
    {!! Form::macro('hora_i', function(){
        return '<input type="time" name="hora_inicio">';
    }); !!}
    <div class="form-group">
        {!! Form::label('name', 'Hora Inicio') !!}
        {!! Form::hora_i() !!}
    </diV>
    {!! Form::macro('hora_f', function(){
        return '<input type="time" name="hora_fin">';
    }); !!}
    <div class="form-group">
            {!! Form::label('name', 'Hora Fin') !!}
            {!! Form::hora_f() !!}
        </diV>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}