<div class="p-4">
      @foreach($icons as $icon)
          <div class="flex flex-row w-1/12 px-2 py-3 text-6xl text-center text-indigo-400 bg-white " >
            <div>
              <i class="{{ $icon->categoryfaicon->class }} {{ $icon->value }}"></i>
            </div>
            <div class="items-center text-xs ">{{ $icon->value }}</div>
          </div>
          
      @endforeach

      <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">    
        {{ $icons->links()}}
    </div>
</div>
