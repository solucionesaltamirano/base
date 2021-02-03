<x-app-layout>


{{-- @section('content') --}}
    <section class="content-header">
        <h1>
            Categoryfaicon
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'categoryfaicons.store']) !!}

                        @include('admin.categoryfaicons.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
{{-- @stop --}}

</x-app-layout>


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
