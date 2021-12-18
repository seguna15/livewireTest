<div>
    <h3>This is the test livewire Component</h3>
    <input type="text" wire:model="title">
    <textarea wire:model="body" name="" id="" cols="30" rows="10"></textarea>
    <p>Title: {{ $title }}</p>
    <p>Test: {{$test}}</p>
    <p>Body: {{ $body }}</p>
    <p>MountCall: {{ $mountCall }}</p>
    <p>hydrateCall: {{ $hydrateCall }}</p>
    <p>updatedCall: {{ $updatedCall }}</p>
    <button wire:click="resetTitle('Livewire', 'Livewire Body')">Reset</button>
</div>



   <div class="flex">
        @if($photos)
            Photo Preview:
            <div class="flex bg-blue-200 p-4 rounded-lg">
                @foreach($photos as $photo)
                <img class="w-32 h-32 p-2 rounded-lg" src="{{ $photo->temporaryUrl() }}">
            @endforeach
            </div>
        @endif
    </div>
