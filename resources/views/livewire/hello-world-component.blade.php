<div>
    <h1>Hello, World!</h1>
    <button wire:click="dispatchJob">Dispatch Queue Job</button>

    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
