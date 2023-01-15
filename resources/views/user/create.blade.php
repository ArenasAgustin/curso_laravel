@extends('layouts.admin')

@section('content')
    {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}
    @include('user.forms.userForm')

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
