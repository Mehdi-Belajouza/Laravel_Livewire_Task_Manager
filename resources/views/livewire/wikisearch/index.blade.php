<div>
    <input type="text" wire:model="search" placeholder="Search...">
    <button wire:click="WikiSearch('{{ $search }}')">Search</button>

    <div wire:loading wire:target="WikiSearch">Loading...</div>

    <div wire:poll.5s="WikiSearch('{{ $search }}')">
        {{ $profile }}
    </div>
</div>
