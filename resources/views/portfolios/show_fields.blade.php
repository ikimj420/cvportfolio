<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $portfolio->title !!}</p>
</div>
<!-- Dev Field -->
<div class="form-group">
    {!! Form::label('dev', 'Dev:') !!}
    <p>{!! $portfolio->dev !!}</p>
</div>
<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{!! $portfolio->link !!}</p>
</div>
<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $portfolio->desc !!}</p>
</div>
<!-- Cover Images Field -->
<div class="form-group">
    {!! Form::label('cover_images', 'Cover Images:') !!}
    <p>{!! $portfolio->cover_images !!}</p>
    @if(!empty($portfolio))
        <div>
            <img src="{!! asset('/storage/portfolio').'/'.$portfolio->cover_images !!}" alt="{!! $portfolio->title !!}" style="max-width: 150px;">
        </div>
    @endif
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $portfolio->created_at->format('M, d Y') !!}</p>
</div>