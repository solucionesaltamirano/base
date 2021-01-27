<div>
    <nav class="fixed z-50 w-full bg-gray-800 border-b border-white" x-data=" { open : false } ">
        
        {{-- Menu Desk --}}
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                
                <!-- boton hamburguesa -->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden" >
                    <button x-on:click=" open = true" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        
                        <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        
                    </button>
                </div>
                
                {{-- opciones Desck --}}
                <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">

                    {{-- logos  --}}
                    <a href="/" class="flex items-center flex-shrink-0">

                        <img src="{{ asset('storage/logo-a.png') }}" class="hidden w-auto h-10 lg:block" alt="Soluciones Altamirano">
                        <span class="hidden pl-4 mr-4 font-semibold text-gray-300 w-28 lg:block"> Soluciones Altamirano</span>
                        
                        <img class="block w-auto h-8 lg:hidden" src="{{ asset('storage/logo-a.png') }}" alt="Soluciones Altamirano"/>
                        <span class="block pl-2 text-gray-300 lg:hidden w-28"> Soluciones Altamirano</span>
                        
                    </a>

                    {{-- items menu --}}
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md"> 
                                <i class="fal fa-tachometer-alt"></i> Dashboard
                            </a>
                            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                <i class="fal fa-users"></i> Team
                            </a>
                            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                <i class="fal fa-briefcase"></i> Projects
                            </a>
                            <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                <i class="fal fa-calendar-alt"></i> Calendar    
                            </a>
                        </div>
                    </div>
                </div>

                @auth
                
                    {{-- notificacion y perfil --}}
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        
                        <!-- bell notification -->
                        <button class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">

                            <span class="sr-only">View notifications</span>
                            
                            <div class="w-6 h-6">
                                

                                <span class="relative inline-block">
                                    <i class="text-xl fal fa-bell"></i>

                                    @if ( $notifications  > 0 )
                                        
                                        <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs leading-none text-red-100 transform -translate-y-1/2 bg-red-600 rounded-full translate-x-2/3">
                                            {{ $notifications }}
                                        </span>
                                    @endif

                                    
                                  </span>

                                
                            </div>

                            
                            
                        </button>
        
                        <!-- Profile dropdown -->
                        <div class="relative ml-3 " x-data="{ open: false }">

                            {{-- Imagen perfil --}}
                            <div>
                                <button x-on:click="open = true" class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
                                </button>
                            </div>
                            
                            {{-- Opciones perfil --}}
                            <div x-show="open" x-on:click.away=" open = false " class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    Your Profile 
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" >
                                    Settings
                                </a>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }} " class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Salir
                                    </a>
                                </form>


                                
                                
                            </div>
                        </div>
                    </div>
                    
                @else

                    <div class="rounded-lg">
                        <a href="{{ route('register') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                            <i class="fal fa-sign-in-alt"></i> Registrarse    
                        </a>
                        <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white ">
                            <i class="fal fa-user"></i> Ingresar    
                        </a>
                    </div>
                
                @endauth
                
                

                
            </div>
        </div>
    
        
        {{-- Menu Principal Mobil --}}
        <div class=" sm:hidden" x-show="open" x-on:click.away="open = false">
            <div class="px-2 pt-2 pb-3 space-y-1">
                
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md">
                    <i class="fal fa-tachometer-alt"></i>D
                </a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fal fa-users"></i> T
                </a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fal fa-briefcase"></i> P
                </a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fal fa-calendar-alt"></i> C
                </a>
            </div>
        </div>
        
    </nav>
</div>
