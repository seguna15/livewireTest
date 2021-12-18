<!-- Single File Upload -->
<div class="w-full">
    <div class="flex">
        @if ($photo)

            Photo Preview:
            <img  class="w-32 h-32" src="{{ $photo->temporaryUrl() }}">

        @endif

      
    </div>
   <div class="flex">
        <form wire:submit.prevent="save">
            <input type="file" wire:model="photo">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="bg-blue-300 p-2 rounded-lg">Save Photo</button>
        </form>
   </div>
</div>
