<!-- Fullname Field -->
<div class="form-group">
    {!! Form::label('fullName', 'Full Name:') !!}
    <p>{!! $user->fullName !!}</p>
</div>
<!-- Areafield Field -->
<div class="form-group">
    {!! Form::label('areaField', 'Area Field:') !!}
    <p>{!! $user->areaField !!}</p>
</div>
<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $user->country !!}</p>
</div>
<!-- Birthdate Field -->
<div class="form-group">
    {!! Form::label('birthDate', 'Birthdate:') !!}
    <p>{!! $user->birthDate !!}</p>
</div>
<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{!! $user->address !!}</p>
</div>
<!-- Phones Field -->
<div class="form-group">
    {!! Form::label('phones', 'Phones:') !!}
    <p>{!! $user->phones !!}</p>
</div>
<!-- Aboutme Field -->
<div class="form-group">
    {!! Form::label('aboutMe', 'About Me:') !!}
    <p>{!! $user->aboutMe !!}</p>
</div>
<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at->format('M, d Y') !!}</p>
</div>