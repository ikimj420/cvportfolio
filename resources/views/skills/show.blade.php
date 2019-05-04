@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>Skill</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding: 0 20px">
                    {!! Form::open(['route' => ['skills.destroy', $skill->id], 'method' => 'delete']) !!}
                    <div class='btn-group pull-right'>
                        <a href="{!! route('skills.edit', [$skill->id]) !!}" class='btn btn-primary'>Edit</a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @include('skills.show_fields')
                    <a href="{!! route('skills.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection