@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Faicon
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faicon, ['route' => ['faicons.update', $faicon->id], 'method' => 'patch']) !!}

                        @include('admin.faicons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop