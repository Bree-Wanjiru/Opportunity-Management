{{-- to access opportunity --}}
@props(['opportunity'])


<x-card>
   
    <div >
            <div >
               <h3 class="text-2xl">
                <a href="/opportunities/{{$opportunity->id}}">{{$opportunity->title}}</a>
               </h3>
          
            </div>
            <div class="text-xl font-bold mb-2 mt-2 text-green-600">
                {{$opportunity->company}}
            </div>
            
            {{-- tags --}}
            <x-opportunity-tags :tagsCsv="$opportunity->tags"/>

            <div class="mt-2 mb-2">
                <p>There is a vacancy for the current position.Be conversant with the skills shown above.</p>
            </div>
           
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> 
                {{$opportunity->location}}
            </div>

            <div class="m-0">
                <a href="/opportunities/{{$opportunity->id}}">
                    <button class="mx-auto lg:mx-0 hover:underline  bg-laravel gradient text-black font-bold rounded-full my-6 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Apply Now
                    </button>
                  </a>

                  <p class="text-slate-500 text-sm">Deadline to apply:{{$opportunity->deadline}}</p>
            </div>
        
    </div>
</x-card> 