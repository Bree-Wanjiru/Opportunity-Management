<x-layout>
    <a href="/" class="inline-block text-black ml-4 ">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    
    <x-card class=" p-10  max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Login
        </h2>
        <p class="mb-4">Log in to your account to post job opportunities</p>
    </header>

    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                UserName
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{old('name')}}"
            />

            @error('name')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />

            <!-- Error -->
            @error('password')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        

        <div class="mb-6">
            <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-[#ff5757]"
            >
                Log in
            </button>
        </div>

        <div class="mt-8">
            <p>
                Don't have an account?
                <a href="/register" class="text-laravel"
                    >Sign Up</a
                >
            </p>
        </div>
    </form>
</x-card>
</x-layout>