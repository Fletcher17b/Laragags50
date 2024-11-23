<x-layout>


<div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">Upload Something Funny</h2>
                        <p class="mb-4">Post a joke or a meme that makes other people laugh</p>
                    </header>

                    <form method="POST" action="/listings" enctype="multipart/form-data">
                        @csrf 
                        <!-- <div class="mb-6">
                            <label for="company" class="inline-block text-lg mb-2"> Company Name</label>
                            <input type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="company"
                                value="{{old('company')}}"
                            /> 
                            @error('company')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div> -->

                        <!-- title -->
                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2">Title:</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title" 
                                placeholder="Example: Funny Cat"
                                value="{{old('title')}}"
                            />
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- location -->
                       <!--  <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2">Job Location</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="location"
                                placeholder="Example: Remote, Boston MA, etc"
                                value="{{old('tittle')}}"
                            />
                        </div> -->

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2">Email</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{old('email')}}"
                            />
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website/Application URL
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="website"
                                placeholder="www.example.com"
                                value="{{old('website')}}"
                            />
                        </div> -->

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: Meme, Traditional Joke, Ironic, etc"
                                value="{{old('tags')}}"
                            />
                            @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        
                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Funny Image (aka: a meme)
                            </label>
                            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                            @error('logo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div> 

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder=" "
                            ></textarea>
                        </div>

                        <div class="mb-6">
                            <button class="bg-slate-600 text-white rounded py-2 px-4 hover:bg-black">
                                Upload Joke
                            </button>

                            <a href="/listings" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>

            
</x-layout>