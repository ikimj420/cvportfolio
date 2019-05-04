@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>Social</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding: 0 20px">
                    {!! Form::open(['route' => ['socials.destroy', $social->id], 'method' => 'delete']) !!}
                    <div class='btn-group pull-right'>
                        <a href="{!! route('socials.edit', [$social->id]) !!}" class='btn btn-primary'>Edit</a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @include('socials.show_fields')
                    <a href="{!! route('socials.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection