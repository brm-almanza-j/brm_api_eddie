
{!! Form::open(['route' => ['regionales.update', $regional->id],'method' => 'PUT']) !!}
<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('nombre', $regional->nombre, ['class' => 'form-control', 'placeholder' => 'Escriba aqui la regional', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}