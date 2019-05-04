<!-- Title Field -->
<div class="form-group col-sm-6">
    <label for="title">Title</label>
    <div class="clearfix"></div>
    <select name="title" class="form-control">
        <option value="">Select</option>
        <option value="linkedin">Linkedin</option>
        <option value="instagram">Instagram</option>
        <option value="facebook">Facebook</option>
        <option value="twitter">Twitter</option>
    </select>
</div>
<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('socials.index') !!}" class="btn btn-default">Cancel</a>
</div>