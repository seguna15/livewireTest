<!--Multiple File Upload -->
<form wire:submit.prevent="save">
    <input type="file" wire:model="photos" multiple>
    @error('photos.*') <span class="error">{{ $message }}</span> @enderror
    <button type="submit" class="bg-blue-300 p-2 rounded-lg">Save Photo</button>
</form>
