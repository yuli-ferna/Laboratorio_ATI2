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
    {{trans('words.users')}}
</div>
<div class="card-body">
<table id="mytable" class="table table-bordred table-striped">
    <thead>
        <th>ID</th>
        <th>{{trans('words.name')}}</th>
        <th>{{trans('words.last_name')}}</th>
        <th>{{trans('words.email')}}</th>
        <th>{{trans('words.gender')}}</th>
        <th>{{trans('words.scheduled')}}</th>
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
                <form action="{{action('FormController@destroy', $form->id)}}" method="post">
                {{csrf_field()}}
                @method('DELETE')
                <button class="btn btn-danger btn-xs" type="submit"><span class="fas fa-minus-circle"></span></button>      
                </form>         
            </td>
            </tr>
        @endforeach
    
    </tbody>
</table>
    
   <a class="btn btn-primary" href="{{ route('form.create') }}">{{trans('words.add_user')}}</a>
   
</div>

</div>
@endsection