@extends('alerts.layout', ['success' => false, 'dNone' => !Session::has('message-error')])

@section('message-error')
    {{ Session::get('message-error') }}
@endsection
