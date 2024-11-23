@props(['comment'])

<div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mt-2 mb-2 ">
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                {{$comment->user->name }}
            </h3>
            
            <div class="bg-white rounded p-6">
                <h4 class="mt:2rem">
                    {{$comment->comment}}    
                </h4>
            </div>
            
        </div>
    </div>
</div>