@props(['listing'])

<div class="bg-gray-50 border border-gray-200 rounded-lg p-6 ">
        <div class="flex">
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no_image.png')}}"
                alt="" 
            />
            <div>
                <h3 class="text-2xl">
                    <a href="/listings/{{$listing->id}}">{{$listing->title }}</a>
                </h3>
                <x-tags :tagsCsv="$listing->tags"/>
               
                <h4 class="mt:2rem">{{$listing->description}} </h4>
            </div>
        </div>
        <div class="ml-4">
                    @if (auth()->user()->favoriteListings->contains($listing->id))
                        <form method="POST" action="{{ route('listings.removeFavorite', $listing->id) }}">
                            @csrf
                            <button type="submit" class="text-red-500"><i class="fa-solid fa-heart-broken"></i> Remove from
                                Favorites</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('listings.addFavorite', $listing->id) }}">
                            @csrf
                            <button type="submit" class="text-green-500"><i class="fa-solid fa-heart"></i> Add to Favorites</button>
                        </form>
                    @endif
                
        </div>
</div>