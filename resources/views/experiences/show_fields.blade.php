<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $experience->title !!}</p>
</div>
<!-- Company Field -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
    <p>{!! $experience->company !!}</p>
</div>
<!-- Start Field -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    <p>{!! $experience->start->format('M, d Y') !!}</p>
</div>
<!-- End Field -->
<div class="form-group">
    {!! Form::label('end', 'End:') !!}
    <p>{!! $experience->end->format('M, d Y') !!}</p>
</div>
<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $experience->desc !!}</p>
</div>
<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{!! $experience->link !!}</p>
</div>
<!-- Extra Field -->
<div class="form-group">
    {!! Form::label('extra', 'Extra:') !!}
    <p>{!! $experience->extra !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $experience->created_at->format('M, d Y') !!}</p>
</div>