<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $counter->title !!}</p>
</div>
<!-- Count Field -->
<div class="form-group">
    {!! Form::label('count', 'Count:') !!}
    <p>{!! $counter->count !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $counter->created_at->format('M, d Y') !!}</p>
</div>