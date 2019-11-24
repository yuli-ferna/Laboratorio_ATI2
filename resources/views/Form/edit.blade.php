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
    {{__('words.add_user')}}
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
            <label for="Nombre">{{__('words.name')}}</label>
            <input type="text" class="form-control" name="Nombre" value="{{$form->Nombre}}"/>
        </div>
        <div class="form-group">
            <label for="Apellido">{{__('words.last_name')}}</label>
            <input type="text" class="form-control" name="Apellido"  value="{{$form->Apellido}}"/>
        </div>
        <div class="form-group">
            <label for="Email">{{__('words.email')}}</label>
            <input type="text" class="form-control" name="Email"  value="{{$form->Email}}"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="Cedula">{{__('words.scheduled')}}</label>
            <input type="text" class="form-control" name="Cedula"  value="{{$form->Cedula}}"/>
        </div>
            <label for="Genero">{{__('words.gender')}}</label>
            <select name="Genero" class="form-control  col-md-3" id="Genero">
                <option value="">{{__('words.select_gender')}}</option>
                @if($form->Genero == 0)
                <option value="0" selected>{{__('words.male')}}</option>
                <option value="1">{{__('words.female')}}</option>
                @else
                <option value="0">{{__('words.male')}}</option>
                <option value="1" selected>{{__('words.female')}}</option>
                @endif
            </select>
        <br>

            <input type="submit"  value="{{__('words.update')}}" class="btn btn-success btn-block">
            <a href="{{ route('form.index') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a>
        	

    </form>
</div>
</div>
@endsection