{!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí su nombre', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Usuario') !!}
        {!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí su usuario', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Contraseña') !!}
        {!! Form::password('contrasena', ['class' => 'form-control', 'placeholder' => 'Escriba aquí su contraseña', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Correo') !!}
        {!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí su correo electronico', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Activo') !!}
        {!! Form::label('name', 'Si') !!}
        {!! Form::radio('activo', '1') !!}
        {!! Form::label('name', 'No') !!}
        {!! Form::radio('activo', '0') !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Activo') !!}
        {!! Form::label('name', 'Si') !!}
        {!! Form::radio('priv_admin', '1') !!}
        {!! Form::label('name', 'No') !!}
        {!! Form::radio('priv_admin', '0') !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}