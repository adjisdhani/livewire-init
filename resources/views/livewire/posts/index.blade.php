<div>
    @foreach ($posts as $item)
        <livewire:posts.block :post="$item" wire:key="{{ $item->id }}"/>
    @endforeach
</div>
