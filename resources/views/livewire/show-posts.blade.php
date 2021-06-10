<div>
    {{-- Stop trying to control. --}}
    <!-- ingresa el texto <input wire:model.debounce.500ms="titulo" type="text">
    mira como cambio {{ $titulo }}
    lazy <input type="text" wire:model.lazy="titulo">
    mira como cambio {{ $titulo }} -->
    <hr>
    <input type="text" wire:model.defer="titulo">
    <button wire:click="search">Search</button>
</div>
<hr>
<div>
@forelse ($tp as $t)
    <li>{{ $t->TPR_DES }}</li>
@empty
    <p>No users</p>
@endforelse
</div>