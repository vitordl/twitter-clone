<div>
    @if ( $path = auth()->user()->profile_photo_path)
        <img src="{{ url("{$path}") }}" alt="pic"  class="rounded-full w-10 h-10">
          
    @else
        <img alt="usuario" src="{{url('images/profile_normal.png')}}"  class="rounded-full w-10 h-10">
    @endif
</div>

