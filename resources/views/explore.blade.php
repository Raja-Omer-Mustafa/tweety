<x-app>
    

     <!-- <form action="{{ route('search') }}" method="GET">
    <input type="text" style="border: 1px;" name="search" required/>
    <button type="submit">Search</button>
</form> -->
<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
   <form action="{{ route('search') }}" method="GET">
       

        <textarea
            name="search" 
            class="w-full"
            placeholder="Search the user"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ current_user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10"
            >
                Search
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
@if($posts->isNotEmpty())
    @foreach ($posts as $post)
         <a href="{{ $post->path() }}" class="flex items-center mb-5">
                <img src="{{ $post->avatar }}"
                      alt="{{ $post->username }}'s avatar"
                      width="60"
                      class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">{{ '@' . $post->username }}</h4>
                </div>
            </a>
    @endforeach

    
    
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif


</x-app>
