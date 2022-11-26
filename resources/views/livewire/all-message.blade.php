<div wire:poll>

        <div class="">
            @foreach ($messages as $message)
                <div class="flex justify-between">
                    <div class="pt-6">
                        <div cl>
    
                            <div class="flex items-center px-2 py-1">
                                <img class="h-5 w-5 rounded-full" src="{{ $message->user->profile_photo_url }}"  alt="{{ Auth::user()->name }}" />
                                <div class="ml-3 ">
                                    <span
                                        class="text-sm font-semibold antialiased block leading-tight">{{ $message->user->name }}</span>
                                    <span class="text-gray-600 text-xs block">{{ $message->user->email }}</span>
                                </div>
                            </div>
    
                            <div
                                class="rounded-md p-2 w-[200px] text-black @if ($message->user_id == Auth::id())  max-w-xs bg-gray-500 text-sm text-white rounded-md shadow-lg dark:bg-gray-700 mb-3 ml-3 @else max-w-xs bg-gray-800 text-sm text-white rounded-md shadow-lg dark:bg-gray-900 mb-3 ml-3 ml-3 @endif ">
    
                                
    
    
                                {{ $message->message }}
                            </div>
    
                        </div>
                    </div>
    
    
                </div>
            @endforeach
        </div>
    
    
    
</div>
