<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="{{ route('tweets.store') }}" enctype="multipart/form-data">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            required
            autofocus
        ></textarea>
        <div class="form-group">
            
        <label for="filename"></label>
    <input type="file" name="file" id="file" class="form-control">
    <span class="text-danger"> {{ $errors->first('file') }}</span>
        </div>

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
                Publish
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
