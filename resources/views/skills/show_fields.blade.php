<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $skill->title !!}</p>
</div>
<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $skill->desc !!}</p>
</div>
<!-- Count Field -->
<div class="form-group">
    {!! Form::label('count', 'Count:') !!}
    <p>{!! $skill->count !!}</p>
</div>
<!-- Extra Field -->
<div class="form-group">
    {!! Form::label('extra', 'Extra:') !!}
    <p>{!! $skill->extra !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $skill->created_at->format('M, d Y') !!}</p>
</div>