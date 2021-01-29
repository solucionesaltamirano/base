<div>
    <h2 class="pt-4 pl-12 text-3xl "> Data Table Users </h2>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                            <div class="flex px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                                <input 
                                wire:model="search"
                                type="text" 
                                class="block w-full mt-1 text-sm text-gray-500 border-gray-200 rounded-md shadow-sm form-input" placeholder="Buscar..">

                                <div class="" >
                                    <select wire:model="perPage" class="block mt-1 ml-4 text-sm text-gray-500 border-gray-200 rounded-md shadow-sm form-input">
                                        <option value="5">5 por página</option>
                                        <option value="10">10 por página</option>
                                        <option value="15">15 por página</option>
                                        <option value="25">25 por página</option>
                                        <option value="50">50 por página</option>
                                        <option value="100">100 por página</option>
                                    </select>
                                </div>

                                @if ($search !== '')
                                    
                                    <button wire:click='clear' class="block px-3 py-1 mt-1 ml-4 text-sm text-gray-500 border border-gray-200 rounded-md shadow-sm form-input" >X</button>
                                @endif
                                
                                
                            </div>
                            
                            @if($users->count())
                            
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Teams
                                    </th><th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Opciones
                                    </th>
                                
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                                            </div>
                                            <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $user->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $user->email }}
                                            </div>
                                            </div>
                                        </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex ">
                                                
                                                
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $user->allTeams()->pluck('name')->join(' - ') }}
                                                </div>
                                                
                                                
                                            </div>
                                            </td>
                                        
                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                    
                                <!-- More items... -->
                                </tbody>
                            </table>

                            <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">    
                                {{ $users->links()}}
                            </div>

                            @else
                            <div class="px-4 py-3 text-gray-400 bg-white border-t border-gray-200 sm:px-6">
                                No hay resultados para la busqueda "{{$search}}" en la página {{ $page }} al mostrar {{ $perPage }} por página
                            </div>
                            @endif
                        
                        </div>
                    </div>
                    </div>
                </div>
  
                
            </div>
        </div>

    </div>

</div>
