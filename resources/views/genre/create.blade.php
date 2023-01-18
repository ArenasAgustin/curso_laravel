@extends('layouts.admin')

@section('content')
	{!!Form::open()!!}
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong>Genre added correctly.</strong>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    @include('forms.genreForm')
    {!!link_to('#', $title='Register', $attributes = ['id'=>'register', 'class'=>'btn btn-primary'], $secure = null)!!}
    {!!Form::close()!!}
@endsection 

@section('scripts')
    {!! Html::script('js/scriptCreateGenres.js') !!}
@endsection
