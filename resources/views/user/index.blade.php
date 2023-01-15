@extends('layouts.admin')

@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible show" role="alert">
        {{Session::get('message')}}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {!! link_to_route('user.edit', $title = 'Edit', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
