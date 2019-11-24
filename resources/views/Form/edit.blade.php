<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
<div class="card-header">
    Add Item
</div>
<div class="card-body">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('form.update', $form->id) }}">
        <div class="form-group">
            @csrf
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" name="Nombre" value="{{$form->Nombre}}"/>
        </div>
        <div class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" class="form-control" name="Apellido"  value="{{$form->Apellido}}"/>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email"  value="{{$form->Email}}"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="Cedula">Cédula</label>
            <input type="text" class="form-control" name="Cedula"  value="{{$form->Cedula}}"/>
        </div>
            <label for="Genero">Género</label>
            <select name="Genero" class="form-control  col-md-3" id="Genero">
                <option value="">Selecciona tu género</option>
                @if($form->Genero == 0)
                <option value="0" selected>Masculino</option>
                <option value="1">Femenino</option>
                @else
                <option value="0">Masculino</option>
                <option value="1" selected>Femenino</option>
                @endif
            </select>
        <br>
        <!-- <button type="submit" class="btn btn-primary">Enviar</button>
         -->

            <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
            <a href="{{ route('form.index') }}" class="btn btn-info btn-block" >Atrás</a>
        	

    </form>
</div>
</div>
@endsection