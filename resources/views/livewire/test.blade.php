<div>
    <h3>This is the test livewire Component</h3>
    <input type="text" wire:model.lazy="title">
    <textarea wire:model="body" name="" id="" cols="30" rows="10"></textarea>
    <p>Title: {{ $title }}</p>
    <p>Body: {{ $body }}</p>
    <button wire:click="resetTitle('Livewire', 'Livewire Body')">Reset</button>
</div>
