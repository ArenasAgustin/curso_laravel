@extends('layouts.admin')

@section('content')
    @include('alerts.success')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cast</th>
                <th>Direction</th>
                <th>Duration</th>
                <th>Genres</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
        </thead>

        <tbody>
            @if ($movies->isEmpty())
                <tr>
                    <td colspan="7">No movies</td>
                </tr>
            @endif

            @if (!$movies->isEmpty())
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->cast }}</td>
                        <td>{{ $movie->direction }}</td>
                        <td>{{ $movie->duration }}</td>
                        <td>
                            @foreach ($movie->getGenreListAttribute() as $genre)
                                <span>{{ $genre }}</span>
                            @endforeach
                        </td>
                        <td>{{ $movie->image }}</td>
                        <td>
                            {!! link_to_route('movies.edit', $title = 'Edit', $parameters = $movie, $attributes = ['class' => 'btn btn-primary']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {!! $movies->render() !!}
@endsection
