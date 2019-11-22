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
    <form method="post" action="{{ route('form.store') }}">
        <div class="form-group">
            @csrf
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" name="Nombre"/>
        </div>
        <div class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" class="form-control" name="Apellido"/>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="Cedula">Cédula</label>
            <input type="text" class="form-control" name="Cedula"/>
        </div>
            <label for="Genero">Género</label>
            <select name="Genero" class="form-control  col-md-3" id="Genero">
                <option value="">Selecciona tu género</option>
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</div>
@endsection