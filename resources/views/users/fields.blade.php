<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullName', 'Full Name:') !!}
    {!! Form::text('fullName', null, ['class' => 'form-control']) !!}
</div>
<!-- Areafield Field -->
<div class="form-group col-sm-6">
    {!! Form::label('areaField', 'Area Field:') !!}
    {!! Form::text('areaField', null, ['class' => 'form-control']) !!}
</div>
<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthDate', 'Birth Date:') !!}
    {!! Form::date('birthDate', null, ['class' => 'form-control','id'=>'birthDate']) !!}
</div>
@section('scripts')
    <script type="text/javascript">
        $('#birthDate').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<!-- Phones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phones', 'Phones:') !!}
    {!! Form::text('phones', null, ['class' => 'form-control']) !!}
</div>
<!-- Aboutme Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('aboutMe', 'About Me:') !!}
    {!! Form::textarea('aboutMe', null, ['class' => 'form-control']) !!}
</div>
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<!-- Cv Field -->
<div class="form-group col-lg-12">
    {!! Form::label('cv', 'Cv:') !!}
    {!! Form::file('cv', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-lg-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>