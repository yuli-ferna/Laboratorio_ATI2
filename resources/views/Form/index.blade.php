<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
<div class="card-header">
    Usuarios
</div>
<div class="card-body">
<table id="mytable" class="table table-bordred table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Genero</th>
        <th>Cedula</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        @foreach($forms as $form)
            <tr>
            <td>{{$form->id}}</td>
            <td>{{$form->Nombre}}</td>
            <td>{{$form->Apellido}}</td>
            <td>{{$form->Email}}</td>
            <td>
                @if($form->Genero == 0)
                    Masculino
                @else
                    Femenino
                @endif
            </td>
            <td>{{$form->Cedula}}</td>
            <td>
               <a class="btn btn-primary" href="{{ action('FormController@edit', $form->id )}}"><i class="fas fa-pen"></i></a>            
            </td>
            <td>
            <a class="btn btn-danger" href="{{ action('FormController@edit', $form->id )}}"><i class="fas fa-minus-circle"></i></a>                        
            </td>
            </tr>
        @endforeach
    
    </tbody>
</table>
    
   <a class="btn btn-primary" href="{{ route('form.create') }}">Añadir nuevo usuario</a>
</div>

</div>
@endsection