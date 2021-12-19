<div class="w-full">
    <div class="w-full m-2">
        <div class="w-full m-4 p-2">
            @if(session()->has('message'))
            <div class="p-2 bg-green-400 text-gray-100 font-bold">
                {{ session('message') }}
            </div>
            @endif
        </div>

        <div class="w-full">
            <form wire:submit.prevent="createBlog">
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

    <div class="mt-4 p-4">
        <div class="flex flex-col">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$blog->title}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button wire:click="deleteBlog({{$blog->id}})" class="text-red-400 p-2">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="m-2 p-2">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>