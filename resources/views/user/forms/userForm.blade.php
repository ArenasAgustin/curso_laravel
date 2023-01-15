<div class="form-group">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the username']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Enter the user's email"]) !!}
</div>

<div class="form-group">
    {!! Form::label('Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter a password']) !!}
</div>
