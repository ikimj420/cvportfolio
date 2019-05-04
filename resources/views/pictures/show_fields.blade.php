<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $picture->title !!}</p>
</div>
<!-- Section Field -->
<div class="form-group">
    {!! Form::label('section', 'Section:') !!}
    <p>{!! $picture->section !!}</p>
</div>
<!-- Cover Images Field -->
<div class="form-group">
    {!! Form::label('cover_images', 'Cover Images:') !!}
    <p>{!! $picture->cover_images !!}</p>
    @if(!empty($picture))
        <div>
            <img src="{!! asset('/storage/pictures').'/' .$picture->cover_images !!}" alt="{{ $picture->title }}" style="max-width: 150px;">
        </div>
    @endif
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $picture->created_at->format('M, d Y') !!}</p>
</div>