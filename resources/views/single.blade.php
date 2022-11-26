<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comentarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pg-white border-b border-gray-200 ">

                    <div class="flex items-center px-4 py-3">
                        <img class="h-8 w-8 rounded-full" src=" {{ $post->user->profile_photo_url }} "  alt="{{ Auth::user()->name }}" />
                        <div class="ml-3 ">
                            <span
                                class="text-sm font-semibold antialiased block leading-tight">{{ $post->user->name }}</span>
                            <span class="text-gray-600 text-xs block">{{ $post->user->email }}</span>
                        </div>
                    </div>
                    
                    <div class="grind gap-5">
                        <div class="text-sm">
                            {{ $post->body }}
                        </div>
                        <div class="shadow-md px-4  ">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="rounded-md object-cover h-60 w-60">
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-lg font-bold">{{ $post->user->name }}</span>
                                    <span class="text-lg font-this">{{ $post->created_at->diffForHumans() }}</span>
                                </div>

                                
                            </div>

                            <hr>
                        <livewire:fetch-comments :postId="$post->id" />

                            <div class="pt-6">
                                <hr>
                                <livewire:add-comment :postId="$post->id" />
                            </div>

                    
                </div>
            </div>
        </div>
    </div>


    <div class="py-2 mb-3">




        <livewire:fetch-posts />



    </div>

</x-app-layout>
