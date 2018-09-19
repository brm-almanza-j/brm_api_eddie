{!! Form::open(['route' => 'marcas.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el nombre de la marca', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Dirección') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí la dirección de la marca', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Telefono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el telefono de la marca', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Correo') !!}
        {!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el correo de la marca', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Activo') !!}
        {!! Form::label('name', 'Si') !!}
        {!! Form::radio('activo', '1') !!}
        {!! Form::label('name', 'No') !!}
        {!! Form::radio('activo', '0') !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Ciudad') !!}
        {!! Form::select('id_ciudad', $select[0] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Cliente') !!}
        {!! Form::select('id_cliente', $select[1] ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}