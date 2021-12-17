<li>ID: {{$post->id}} {{ $post->title }}       
    <button wire:click="deletePost({{ $post->id }})" class="text-red-500">Delete</button>
</li>
