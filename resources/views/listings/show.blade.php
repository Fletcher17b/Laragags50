<x-layout>
    <link rel="stylesheet" href="{{ asset('css/navbar_styles.css') }}">


    <main class="">
        <x-card class="mt-2">
            <div class="flex ">
                <button>
                    <a href="{{ url()->previous() }}" class="inline-block text-black ">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>
                </button>

                @if (auth()->id() == $listing->user_id)
                    <form method="POST" action="/listings/{{$listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash ml-2"></i> Delete </button>
                    </form>
                @endif


                <div class="ml-4">
                    @auth
                        @if (auth()->user()->favoriteListings->contains($listing->id))
                            <form method="POST" action="{{ route('listings.removeFavorite', $listing->id) }}">
                                @csrf
                                <button type="submit" class="text-red-500">
                                    <i class="fa-solid fa-heart-broken"></i> Remove from Favorites
                                </button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('listings.addFavorite', $listing->id) }}">
                                @csrf
                                <button type="submit" class="text-green-500">
                                    <i class="fa-solid fa-heart"></i> Add to Favorites
                                </button>
                            </form>
                        @endif
                    @else
                        <p class="text-gray-500">Please <a href="{{ route('login') }}" class="text-blue-500">log in</a> to
                            manage your favorites.</p>
                    @endauth

                </div>
            </div>


        </x-card>
        <div class=" mt-2">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="w-48 mr-6 mb-6" alt=""
                        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no_image.png')}}" />

                    <h3 class="text-2xl mb-2">{{$listing->title}}</h3>

                    <!--<div class="text-xl font-bold mb-4">{{$listing->company}}</div>-->
                    <x-tags :tagsCsv="$listing->tags" />

                    <!-- <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                </div> -->

                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Description
                        </h3>
                        <div class="text-lg space-y-6">
                            <p>
                                {{$listing->description}}
                            </p>

                            <!-- <a
                            href="mailto:test@test.com"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a
                            href="{{$listing->website}}"
                            target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit
                            Website</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (auth()->id() == $listing->user_id)
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{$listing->id}}/edit">
                    <i class="fa-solid fa-pencil"> </i> Edit
                </a>
            </x-card>
        @endif

        <div class="bg-gray-50 border border-gray-200 p-10 rounded mt-6">
            @auth
                <h3 class="text-2xl font-bold mb-4">Comment something funny or add to the joke </h3>
                <form method="POST" action="/listings/{{$listing->id}}/comments">
                    @csrf
                    <div class="mb-4">
                        @guest
                            <label for="comment" class="inline-block text-lg mb-2">Must be logged in to comment</label>
                        @endguest

                        <textarea class="border border-gray-200 rounded p-2 w-full" name="comment" rows="4"
                            required></textarea>
                        @error('comment')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <button class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">Add Comment</button>
                    </div>
                </form>
            @endauth
            @guest
                <label for="comment" class="inline-block text-lg mb-2">Must be logged in to comment</label>
            @endguest

        </div>

        <x-card class="mt-4 bg-slate-600">

            @foreach ($listing->comments as $comment)

                <x-Commentcard :comment="$comment">

                </x-Commentcard>


            @endforeach

        </x-card>





    </main>

</x-layout>