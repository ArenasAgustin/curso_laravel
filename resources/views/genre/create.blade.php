@extends('layouts.admin')

@section('content')
    @include('alerts.genreSuccess')
    @include('alerts.genreError')

    {!! Form::open() !!}

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    @include('forms.genreForm')

    {!! link_to('#', $title = 'Register', $attributes = ['id' => 'register', 'class' => 'btn btn-primary'], $secure = null) !!}

    {!! Form::close() !!}
@endsection

@section('scripts')
    {!! Html::script('js/scriptCreateGenres.js') !!}
@endsection
