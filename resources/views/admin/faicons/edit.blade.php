<x-app-layout>
    <section class="">
        <h1>
            Faicon
        </h1>
   </section>
   <div class="">
       <div class="">
           <div class="">
               <div class="">
                   {!! Form::model($faicon, ['route' => ['faicons.update', $faicon->id], 'method' => 'patch']) !!}

                        @include('admin.faicons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</x-app-layout>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop