@extends('layouts.admin')

@section('content')
    @include('alerts.errors')

    {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method' => 'PUT']) !!}
    @include('forms.movieForm')
    <div class="form-group">
        {!! Form::submit('Update Movie', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['route' => ['movies.destroy', $movie->id], 'method' => 'DELETE']) !!}
    <div class="form-group">
        {!! Form::submit('Delete Movie', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
@stop
