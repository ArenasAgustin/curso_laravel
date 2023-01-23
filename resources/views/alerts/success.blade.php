@extends('alerts.layout', ['success' => true, 'dNone' => !Session::has('message')])

@section('message-success')
    {{ Session::get('message') }}
@endsection
