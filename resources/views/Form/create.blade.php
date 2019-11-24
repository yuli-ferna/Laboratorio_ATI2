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
    <form method="post" action="{{ route('form.store') }}">
        <div class="form-group">
            @csrf
            <label for="Nombre">{{trans('words.name')}}</label>
            <input type="text" class="form-control" name="Nombre"/>
        </div>
        <div class="form-group">
            <label for="Apellido">{{trans('words.last_name')}}</label>
            <input type="text" class="form-control" name="Apellido"/>
        </div>
        <div class="form-group">
            <label for="Email">{{trans('words.email')}}</label>
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="Cedula">{{trans('words.scheduled')}}</label>
            <input type="text" class="form-control" name="Cedula"/>
        </div>
            <label for="Genero">{{trans('words.gender')}}</label>            
            <select name="Genero" class="form-control  col-md-3" id="Genero">
                <option value="">{{trans('words.select_gender')}}</option>
                <option value="0">{{trans('words.male')}}</option>
                <option value="1">{{trans('words.female')}}</option>
            </select>
        <br>
        <button type="submit" class="btn btn-success btn-block">{{trans('words.send')}}</button>
        <a href="{{ route('form.index') }}" class="btn btn-info btn-block" >{{trans('words.back')}}</a>

    </form>
</div>
</div>
@endsection