<div>
    @props(['color' => 'blue', 'title' => ''])

    <div class="alert bg-{{$color}}-100 border-t border-b border-{{$color}}-500 text-{{$color}}-700 px-4 py-3 relative" role="alert">
        <p class="font-bold">{{ $title }}</p>
        <p class="text-sm">{{ $slot }}</p>
    </div>
</div>
