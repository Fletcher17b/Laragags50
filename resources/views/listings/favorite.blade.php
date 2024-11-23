<x-layout>
  @unless($listings->isEmpty())
  @foreach($listings as $listing)
    <x-listingCard :listing="$listing" />
  @endforeach
  @else
  <x-card>
    <h1 class="text-center">No favorited Listings</h1>
  </x-card>
  
  @endunless
</x-layout>