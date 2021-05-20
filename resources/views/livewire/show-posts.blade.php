<div>
    {{-- Stop trying to control. --}}
    ingresa el texto <input wire:model.debounce.500ms="titulo" type="text">
    mira como cambio {{ $titulo }}
    lazy <input type="text" wire:model.lazy="titulo">
    mira como cambio {{ $titulo }}
</div>
