@extends('layouts.admin')

@section('content')
    @include('alerts.errors')

    {!! Form::open(['route' => 'movie.store', 'method' => 'POST', 'files' => true]) !!}
    @include('forms.movieForm')

    <div class="form-group">
        {!! Form::submit('Create movie', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
