<div class="m-4 p-4">
   <livewire:post-create />
    <div class="mt-6 p-4">
        <ul>
            @foreach($posts as $post)
               <livewire:post-show :post="$post" :key="$post->id" />
            @endforeach
        </ul>
    </div>
</div>
