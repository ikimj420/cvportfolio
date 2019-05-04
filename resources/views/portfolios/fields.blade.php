<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Dev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dev', 'Dev:') !!}
    {!! Form::text('dev', null, ['class' => 'form-control']) !!}
</div>
<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>
<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>
<!-- Cover Images Field -->
<div class="form-group col-lg-12">
    {!! Form::label('cover_images', 'Cover Images:') !!}
    {!! Form::file('cover_images', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('portfolios.index') !!}" class="btn btn-default">Cancel</a>
</div>