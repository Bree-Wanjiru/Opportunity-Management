<x-layout>
    <x-card class="p-10">
        <a href="/" class="inline-block text-black ml-4 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Opportunities
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($opportunities->isEmpty())
                @foreach($opportunities as $opportunity)
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a href="show.html">
                            {{$opportunity->title}}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/opportunities/{{$opportunity->id}}/edit"
                            class="text-laravel px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form method="POST" action="/opportunities/{{$opportunity->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-[#ff5757]"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No opportunities found.</p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>