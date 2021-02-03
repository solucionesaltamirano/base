<x-app-layout>

{{-- @section('content') --}}
    <section class="content-header">
        <h1>
            Categoryfaicon
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.categoryfaicons.show_fields')
                    <a href="{{ route('categoryfaicons.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}

</x-app-layout>