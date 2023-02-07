<div class="form-group">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name']) !!}
</div>

<div class="form-group">
    {!! Form::label('Cast:') !!}
    {!! Form::text('cast', null, ['class' => 'form-control', 'placeholder' => 'Enter the cast']) !!}
</div>

<div class="form-group">
    {!! Form::label('Direction:') !!}
    {!! Form::text('direction', null, ['class' => 'form-control', 'placeholder' => 'Enter the direction']) !!}
</div>

<div class="form-group">
    {!! Form::label('Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control', 'placeholder' => 'Enter the duration']) !!}
</div>

<div class="form-group">
    {!! Form::label('Genres:') !!}
    {!! Form::select('genres[]', $genres, isset($movie) ? $movie->getGenreListAttribute(true) : null, [
        'class' => 'form-control',
        'size' => '3',
        'aria-label' => 'size 3 select genres',
        'multiple',
    ]) !!}
</div>

<!--<div class="form-group">
    {!! Form::label('Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => 'Enter the image']) !!}
</div>-->

<div class="form-group">
    {!! Form::label('Image:') !!}
    {!! Form::file('image') !!}
</div>
