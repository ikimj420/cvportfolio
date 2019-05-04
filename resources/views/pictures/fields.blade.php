<!-- Title Field -->
<div class="form-group col-sm-6">
    <label for="title">Title</label>
    <div class="clearfix"></div>
    <select name="title" class="form-control">
        <option value="">Select</option>
        <option value="1">Icon</option>
        <option value="2">User</option>
        <option value="3">BackgraundInfo</option>
        <option value="4">BackgraundExperience</option>
        <option value="5">BackgraundQuoto</option>
        <option value="6">BackgraundRadial</option>
    </select>
</div>
<!-- Section Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section', 'Section:') !!}
    {!! Form::text('section', null, ['class' => 'form-control']) !!}
</div>
<!-- Cover Images Field -->
<div class="form-group col-lg-12">
    {!! Form::label('cover_images', 'Cover Images:') !!}
    {!! Form::file('cover_images', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pictures.index') !!}" class="btn btn-default">Cancel</a>
</div>