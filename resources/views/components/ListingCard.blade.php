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
               <!--  <div class="text-xl font-bold mb-4">{{$listing->company}}</div> -->
                <x-tags :tagsCsv="$listing->tags"/>
                <!-- <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
                </div> -->

                <h4 class="mt:2rem">{{$listing->description}} </h4>
            </div>
        </div>
    </div>