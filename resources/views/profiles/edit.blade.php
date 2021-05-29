<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="name"
            >
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="name"
                   id="name"
                   value="{{ $user->name }}"
                   required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="username"
            >
                Username
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="username"
                   id="username"
                   value="{{ $user->username }}"
                   required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                  for="avatar"
            >
                Avatar
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full"
                       type="file"
                       name="avatar"
                       id="avatar"
                       accept="image/*"
                >

                <img src="{{ asset($user->avatar) }}"
                     alt="your avatar"
                     width="40"
                >
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="email"
            >
                Email
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="email"
                   name="email"
                   id="email"
                   value="{{ $user->email }}"
                   required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password"
            >
                Password
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password"
                   id="password"
                   required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password_confirmation"
            >
                Password Confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password_confirmation"
                   id="password_confirmation"
                   required
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

           <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="dateofbirth">
              Date of birth
            </label>

            <input class="border border-gray-400 p-2 w-full"
              type="date"
              name="date_of_birth"
              id="date_of_birth"
              value="{{ $user->date_of_birth }}"
            >

            @error('date_of_birth')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="dateofbirth">
            Gender
          </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <select id="gender" name="gender" class="border border-gray-400 p-2 w-full">
              <option value="Male" {{ ($user->gender == 'Male') ? 'selected' : '' }}>Male</option>
              <option value="Female" {{ ($user->gender == 'Female') ? 'selected' : '' }}>Female</option>
            </select>
          </div>
        </div>

        <div class="mb-6">
          <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4" >
              Submit
          </button>
          <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>



    </form>
</x-app>
