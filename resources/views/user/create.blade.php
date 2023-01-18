@extends('layouts.admin')

@section('content')
    @include('alerts.errors')

    {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}
    @include('forms.userForm')

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
