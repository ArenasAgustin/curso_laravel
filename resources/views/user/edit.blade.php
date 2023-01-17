@extends('layouts.admin')

@section('content')
    @include('alerts.error')

    {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
    @include('user.forms.userForm')
    <div class="form-group">
        {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
    <div class="form-group">
        {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop
