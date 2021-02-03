<x-app-layout>
    <div class="pt-4 mt-6 ml-4 mr-4 bg-white rounded-lg dark:bg-black">
        <div class="relative inline-flex w-full ">
            <div> 
                <div class="ml-8 font-sans text-2xl font-semibold ">
                    Category faicons
                </div>
            </div>
            <div class="absolute top-0 mt-1 right-8 ">
                <a class="px-2 py-2 ml-8 text-sm text-blue-500 border border-blue-500 rounded hover:text-gray-100 hover:bg-blue-600" href="{{ route('categoryfaicons.create') }}"><i class="fal fa-plus-circle"></i> Agregar nuevo</a>
            </div>
        </div>
        <div class="">
            @include('flash::message')
            
            @include('admin.categoryfaicons.table')
            
        </div>
    </div>

</x-app-layout> 

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop