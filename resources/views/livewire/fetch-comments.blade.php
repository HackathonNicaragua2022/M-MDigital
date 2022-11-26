<div wire:poll>
    
    <div class="pt-2 grid">
        @foreach ($comments as $comment)
            <div class=" relative grid grid-cols-1 gap-4 p-2 mb-4 border rounded-lg bg-white shadow-lg">

                <div class="flex items-center px-4 py-3">
                    <img class="h-8 w-8 rounded-full" src="{{ $comment->user->profile_photo_url }} "  alt="{{ Auth::user()->name }}" />
                    <div class="ml-3 ">
                        <span
                            class="text-sm font-semibold antialiased block leading-tight">{{ $comment->user->username }}</span>
                        <span class="text-gray-600 text-xs block">{{ $comment->user->email }}</span>
                    </div>
                </div>

                
                  {{--   <span class="flex items-center px-4 py-1  text-gray-500">{{ $comment->user->username }}</span>  --}}
                    <span class="flex items-center px-4 py-1 relative text-xl whitespace-nowrap truncate overflow-hidden">{{ $comment->body }}</span>
                    <span class="flex items-center px-4 py-1 text-gray-400 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
