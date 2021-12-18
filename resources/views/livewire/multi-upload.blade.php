<!--Multiple File Upload -->
<div class="w-full">

   
    
    <div class="flex">
        <div wire:loading wire:target="photos">Uploading...</div>
        <form wire:submit.prevent="save">
            <input type="file" wire:model="photos" multiple>
            @error('photos.*') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="bg-blue-300 p-2 rounded-lg">Save Multi Photo</button>
        </form>
    </div>
</div>
