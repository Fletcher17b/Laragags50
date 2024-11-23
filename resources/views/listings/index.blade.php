<x-layout>
    <link rel="stylesheet" href="{{ asset('css/navbar_styles.css') }}">
    @include('partials._banner')
    @include('partials._search')
    <title>Laragon Listings</title>

    <div class="mr-4 ml-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 ">

            @unless(count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listingCard :listing="$listing" />
                @endforeach

            @else
                <h1>Womp Womp</h1>
            @endunless
        </div>

        <div class="mt-18 p-4 mb-12">
            {{$listings->links()}}
        </div>
    </div>
    <x-footer />


</x-layout>