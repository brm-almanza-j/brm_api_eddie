{!! Form::open(['route' => 'clientes.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el nombre del cliente', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Dirección') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí la dirección del cliente', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Telefono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el telefono del cliente', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Correo') !!}
        {!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí el correo del cliente', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Cliente Activo') !!}
        {!! Form::label('name', 'Si') !!}
        {!! Form::radio('activo', '1') !!}
        {!! Form::label('name', 'No') !!}
        {!! Form::radio('activo', '0') !!}
    </div>
    <div class="form-group">
            {!! Form::label('name', 'Ciudad') !!}
            {!! Form::select('id_ciudad', $select_ciudad ) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}