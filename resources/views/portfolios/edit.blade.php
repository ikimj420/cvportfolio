@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>Portfolio</h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($portfolio, ['route' => ['portfolios.update', $portfolio->id], 'enctype' => 'multipart/form-data', 'method' => 'patch']) !!}
                        @include('portfolios.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection