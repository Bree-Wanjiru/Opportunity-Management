<x-layout>
    <a href="/" class="inline-block text-black ml-4 ">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

<x-card class=" p-10 w-3/4 mx-auto mt-24 "
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create an Opportunity
    </h2>
    <p class="mb-4">Post an opportunity to find an employee</p>
</header>

<form method="POST" action="/opportunities">
    {{-- directive to prevent invalid forms --}}
    @csrf
    <div class="mb-6">
        <label
            for="company"
            class="inline-block text-lg mb-2"
            >Company Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="{{old('company')}}"
        />

        @error('company')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"
            >Job Title</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            placeholder="Example: Senior Architect"
            value="{{old('title')}}"
        />

        @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="location"
            class="inline-block text-lg mb-2"
            >Job Location</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="location"
            placeholder="Example: Seattle, USA, etc"
            value="{{old('location')}}"
        />

        @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Contact Email</label
        >
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

    <div class="mb-6">
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
            value="{{old('website')}}"
        />
        @error('website')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="tags"
            placeholder="Example: Construction, Planning, Design, etc"
            value="{{old('tags')}}"
            />
        @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

   

    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
            Job Description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc">
            {{old('description')}}
        </textarea>

        @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="qualifications"
            class="inline-block text-lg mb-2"
        >
            Job Qualifications
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="qualifications"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc">
            {{old('qualifications')}}
        </textarea>

        @error('qualifications')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="amount"
            class="inline-block text-lg mb-2"
            >Amount to be paid</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="amount"
            placeholder="Ksh.120,000"
            value="{{old('amount')}}"
        />

        @error('amount')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="posted"
            class="inline-block text-lg mb-2"
            >Date Posted</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="posted"
            placeholder="Example: 24th October 2023"
            value="{{old('posted')}}"
        />

        @error('posted')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="deadline"
            class="inline-block text-lg mb-2"
            >Deadline date to apply</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="deadline"
            placeholder="Example: 24th October 2023"
            value="{{old('deadline')}}"
        />

        @error('deadline')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    {{-- dropdown --}}
    <div class="mb-6">
    <select name="dropdown">
        
            <option value="Discovery">Discovery</option>
            <option value="Proposal Shared">Proposal Shared</option>
            <option value="Negotiations">Negotiations</option>
            {{old('dropdown')}}
           
    </select>
    </div>

    <div class="mb-6">
        <button
            class="bg-[#ff5757] text-white rounded py-2 px-4 hover:bg-laravel"
        >
            Create Opportunity
        </button>

        
    </div>
</form>
</x-card>
</x-layout>