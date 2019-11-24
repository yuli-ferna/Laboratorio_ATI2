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
    {{trans('words.add_user')}}
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
            <label for="Nombre">{{trans('words.name')}}</label>
            <input type="text" class="form-control" name="Nombre" value="{{$form->Nombre}}"/>
        </div>
        <div class="form-group">
            <label for="Apellido">{{trans('words.last_name')}}</label>
            <input type="text" class="form-control" name="Apellido"  value="{{$form->Apellido}}"/>
        </div>
        <div class="form-group">
            <label for="Email">{{trans('words.email')}}</label>
            <input type="text" class="form-control" name="Email"  value="{{$form->Email}}"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="Cedula">{{trans('words.scheduled')}}</label>
            <input type="text" class="form-control" name="Cedula"  value="{{$form->Cedula}}"/>
        </div>
            <label for="Genero">{{trans('words.gender')}}</label>
            <select name="Genero" class="form-control  col-md-3" id="Genero">
                <option value="">{{trans('words.select_gender')}}</option>
                @if($form->Genero == 0)
                <option value="0" selected>{{trans('words.male')}}</option>
                <option value="1">{{trans('words.female')}}</option>
                @else
                <option value="0">{{trans('words.male')}}</option>
                <option value="1" selected>{{trans('words.female')}}</option>
                @endif
            </select>
        <br>
        <!-- <button type="submit" class="btn btn-primary">Enviar</button>
         -->

            <input type="submit"  value="{{trans('words.update')}}" class="btn btn-success btn-block">
            <a href="{{ route('form.index') }}" class="btn btn-info btn-block" >{{trans('words.back')}}</a>
        	

    </form>
</div>
</div>
@endsection