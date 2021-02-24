<div class="pt-8 pb-10">

    {{-- botones de exportacion --}}
    <div class='inline-flex mb-2 ml-8 font-light border rounded-l rounded-r shadow'>
        <a href="#" class='px-4 py-1 text-gray-800 rounded-l hover:bg-gray-600 hover:text-white hover:shadow-lg '>
            <i class="fal fa-print"></i> Imprimir
        </a>
        <a href="#" class='px-4 py-1 text-green-800 hover:bg-green-600 hover:text-white hover:shadow-lg hover:border-gray-500'>
            <i class="fad fa-file-excel"></i> Excel
        </a>
        <a href="#" class='px-4 py-1 text-red-800 rounded-r hover:bg-red-700 hover:text-gray-100 hover:shadow-lg hover:border-gray-500'>
            <i class="fad fa-file-pdf"></i> PDF
        </a>
    </div>

    
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-md sm:rounded">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow sm:rounded">
                            <table class="min-w-full " id="categoryfaicons-table ">
                                <thead class="divide-x divide-gray-100 bg-bluegoo-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-2 text-xs font-bold tracking-wider text-left text-gray-800 uppercase border-r border-gray-100">
                                            Name
                                        </th>
                                        <th scope="col" class="px-4 py-2 text-xs font-bold tracking-wider text-left text-gray-800 uppercase border-r border-gray-100">
                                            Class
                                        </th>
                                        <th  scope="col" class="px-4 py-2 text-xs font-bold tracking-wider text-left text-gray-800 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($categoryfaicons as $categoryfaicon)
                                    <tr class="hover:bg-blue-200 @if($categoryfaicon->id % 2 === 0) bg-gray-100  @endif  ">
                                        <td class="w-1/2 px-4 py-1 text-gray-500 border border-gray-300 whitespace-nowrap">
                                            {{ $categoryfaicon->name }}
                                        </td>
                                        <td class="w-1/2 px-4 py-1 text-gray-500 border border-gray-300 whitespace-nowrap">
                                            {{ $categoryfaicon->class }}
                                        </td>
                                        <td class="w-1/5 px-4 py-1 border border-gray-300 whitespace-nowrap">
                                            {!! Form::open(['route' => ['categoryfaicons.destroy', $categoryfaicon->id], 'method' => 'delete']) !!}
                                            <div class='right-0 inline-flex text-xs '>
                                                <a href="{{ route('categoryfaicons.show', [$categoryfaicon->id]) }}" class='px-1 py-1 text-gray-800 rounded-l hover:text-white hover:bg-gray-700'>
                                                    <i class="fal fa-eye"></i> Ver
                                                </a>
                                                <a href="{{ route('categoryfaicons.edit', [$categoryfaicon->id]) }}" class='px-1 py-1 text-blue-600 hover:bg-blue-800 hover:text-gray-100 hover:border-gray-500'>
                                                    <i class="fal fa-edit"></i> Editar
                                                </a>
                                                {!! Form::button('<i class="fad fa-trash-alt"></i> Borrar', ['type' => 'submit', 'class' => 'text-red-600 py-1 px-1 hover:bg-red-600 hover:text-gray-100 hover:border-gray-500  rounded-r',  'onclick' => "return confirm('Are you sure?')"]) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">    
                                {{ $categoryfaicons->links() }}

                                
                            </div>

                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

