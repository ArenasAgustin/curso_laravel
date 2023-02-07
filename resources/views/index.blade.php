@extends('layouts.principal')
@section('content')
    @include('alerts.error')
    @include('alerts.success')
    <div class="header">
        <div class="top-header">
            <div class="logo">
                <a href="index"><img src="images/logo.png" alt="" /></a>

                <p>Movie Theater</p>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="header-info">
            <h1>BIG HERO 6</h1>
            {!! Form::open(['route' => 'login.store', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('correo', 'Correo:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu correo']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contrasena', 'Contraseña:') !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa tu contraseña']) !!}
            </div>

            {!! Form::submit('Iniciar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="review-slider">
        <ul id="flexiselDemo1">
            @foreach ($movies as $movie)
                <li><img src="movies/{{ $movie->image }}" alt="{{ $movie->name }}" /></li>
            @endforeach
        </ul>
    </div>
@endsection
