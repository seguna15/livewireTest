<div class="m-4 p-4">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Create Post</h3>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="createPost">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                Title
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" wire:model="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
                                </div>
                                @error('title')
                                <span class="text-red-400 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Body
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="body" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" ></textarea>
                            </div>
                                @error('body')
                            <span class="text-red-400 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                    

                    
                    </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                            </button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-6 p-4">
        <ul>
            @foreach($posts as $post)
                <li>ID: {{$post->id}} {{ $post->title }}<button wire:click="deletePost({{ $post->id }})" class="text-red-500">Delete</button>
                </li>

            @endforeach
        </ul>
    </div>
</div>
