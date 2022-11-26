<div>
    <form wire:submit.prevent="store({{ $postId }})" class="grid gap-3">
        <input type="text" wire:model="body" class="border rounded-md p-6 focus:outline-none px-2 w-full"
            placeholder="Message" id="">
        @error('body')
            <span class="text-red-500">
                {{ $message }}
            </span>
        @enderror
        <div>
            <button class="px-1 py-0 mt-1 bg-transparent outline-none border-2 border-indigo-400 rounded text-indigo-500 font-medium active:scale-95 hover:bg-indigo-600 hover:text-white hover:border-transparent focus:bg-indigo-600 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">Comment</button>
        </div>
    </form>

</div>
