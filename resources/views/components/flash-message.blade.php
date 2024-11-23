@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=> show = false, 5000)" x-show="show" class="fixed top-20 left-1/2 transform -translate-x-1/2 bg-blue-600 px-48 py-3 rounded-xl">
     
        <p>
            {{session('message')}}
        </p>
    </div>
@endif

<!-- Need to add an ok bottom to hide the message once read or add a timer, use flex to accomodate it  -->