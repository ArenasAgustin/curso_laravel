@extends('layouts.admin')

@section('content')
    @include('alerts.success')

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

    {!! $users->render() !!}
@stop
