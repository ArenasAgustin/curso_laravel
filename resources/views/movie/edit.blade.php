@extends('layouts.admin')

@section('content')
    @include('alerts.errors')

    {!! Form::model($movie, ['route' => ['movie.update', $movie->id], 'method' => 'PUT', 'files' => true]) !!}
    @include('forms.movieForm')
    <div class="form-group">
        {!! Form::submit('Update Movie', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['route' => ['movie.destroy', $movie->id], 'method' => 'DELETE', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Movie', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop
