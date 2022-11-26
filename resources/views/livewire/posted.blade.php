<div>

    <div>
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

                                                    <img class="h-8 w-8 rounded-full"
                                                        src="  {{ $this->user->profile_photo_url }}  "
                                                        alt="{{ Auth::user()->name }}" />


                                                    <div class="ml-3 ">
                                                        <span
                                                            class="text-sm font-semibold antialiased block leading-tight">{{ $this->user->email }}</span>
                                                    </div>
                                                </div>








                                                <div class="w-60 cols-4 "> {{ $post->body }} </div>
                                            </div>
                                            <div class="shadow-md px-4  ">



                                                <img src="{{ asset('storage/' . $this->image) }}" alt=""
                                                    class="w-auto rounded-lg rounded-md object-cover flex items-center justify-center w-60 mx-4 mt-3 mb-2">




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

</div>

</div>
