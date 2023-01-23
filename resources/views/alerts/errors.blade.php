@extends('alerts.layout', ['success' => false, 'dNone' => !count($errors) > 0])

@section('message-error')
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endsection
