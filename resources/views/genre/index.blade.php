@extends('layouts.admin')

@section('content')
    @include('modal.genreModal')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Operations</th>
            </tr>
        </thead>

        <tbody id='data'>
        </tbody>
    </table>
@endsection

@section('scripts')
    {!! Html::script('js/scriptShowGenres.js') !!}
@endsection
