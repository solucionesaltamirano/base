<div>
    <h1>{{ $texto}}</h1>

    <button wire:click='notificar'>Aumentar</button>
    

    <input  type="text" wire:model='notification'>

    {{-- <p>{{ $contador }}</p> --}}
    @if ( $notification )
        <h1>Tiene notificaciones</h1>            
    @else
        <h1> <i class="fad fa-address-book"></i> NO TIENE notificaciones</h1>            
        
    @endif

    @foreach ($icons as $icon) 

    <div class="inline-block bg-gray-100 border border-indigo-700" >
        
        <span class='fa-3x text-blue-700 {{ $icon->categoryfaicon->class }}  ' > {!! $icon->value !!}  </span>
    </div>
   

     @endforeach

   

</div>


