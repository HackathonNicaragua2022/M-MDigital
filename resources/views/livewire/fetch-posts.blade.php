<div wire:poll>

    

    

    @foreach ($posts as $post)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pg-white border-b border-gray-200 ">
                    <div class="grind gap-5">

                        



                        <div class="max-w-4x5 mx-60 sm:px-2 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">



                        <div class="text-sm">

                            
                                
                                    <div class="flex items-center px-4 py-3">
                                        
                                        <img class="h-8 w-8 rounded-full" src=" {{ $post->user->profile_photo_url }} "  alt="{{ Auth::user()->name }}" />

                                        
                                        <div class="ml-3 ">
                                            <span
                                                class="text-sm font-semibold antialiased block leading-tight">{{ $post->user->name }}</span>
                                            <span class="text-gray-600 text-xs block">{{ $post->user->email }}</span>
                                        </div>
                                    </div>

                                    
                                
                            
 
                                    

                                   
                       <div class="w-60 cols-4 "> {{ $post->body }} </div>
                        </div>
                        <div class="shadow-md px-4  ">



                            <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                class="w-auto rounded-lg rounded-md object-cover flex items-center justify-center w-60 mx-4 mt-3 mb-2">
                                
                                
                            <div>
                                <div class="flex justify-between">

                                    <a href="#"
                                        class="mt-5 text-gray-500 relative text-xl"></a> 
                                    <span class="mt-4 text-gray-500">{{ $post->created_at->diffForHumans() }}</span>

                                </div>

                                



                                <div class="flex space-x-8">
                                    <a>
                                    <svg wire:click="addLikeToPost({{ $post->id }})"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 cursor-pointer @if ($post->userLikedPost()) w-7 h-7  text-indigo-500 rounded group hover:bg-indigo-500 hover:text-white   active:scale-95  disabled:shadow-none disabled:cursor-not-allowed @endif ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                    </svg> <div class="text-gray-600 text-xs block text-center "> {{ $post->likes->count() }} </div>
                                </a> 



                                    
                                    <a href="{{ route('single.post', $post->id) }}">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 cursor-pointer @if ($post->userCommentsPost()) w-7 h-7 @endif ">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />

                                        </svg> 
                                        <div class="text-gray-600 text-xs block text-center"> {{ $post->comments->count() }}  </div>


                                    </a>
                                     

                                    <div>
                                        <a href="{{ route('messages', $post->user->id) }}"
                                            class=" text-lg font-this px-1 py-0 mt-1 bg-transparent outline-none border-2 border-indigo-400 rounded text-indigo-500 font-medium active:scale-95 hover:bg-indigo-600 hover:text-white hover:border-transparent focus:bg-indigo-600 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">Contactar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
