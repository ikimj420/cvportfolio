<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>
<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::date('start', null, ['class' => 'form-control','id'=>'start']) !!}
</div>
@section('scripts')
    <script type="text/javascript">
        $('#start').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
<!-- End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end', 'End:') !!}
    {!! Form::date('end', null, ['class' => 'form-control','id'=>'end']) !!}
</div>
@section('scripts')
    <script type="text/javascript">
        $('#end').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>
<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>
<!-- Extra Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('extra', 'Extra:') !!}
    {!! Form::textarea('extra', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('experiences.index') !!}" class="btn btn-default">Cancel</a>
</div>