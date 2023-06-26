{{-- get the layout --}}
<x-layout>



<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Go to home
</a>
<div class="mx-4">
<x-card class="p-10">
    <div
        class="flex flex-col"
       
    >
        

        <h3 class="text-2xl mb-2 font-bold text-left">{{$opportunity->title}}</h3>
        <div class="text-xl font-medium mb-4">{{$opportunity->company}}</div>
        
         {{-- tags --}}
         <x-opportunity-tags :tagsCsv="$opportunity->tags"/>

            
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$opportunity->location}}
        </div>

        <div class="mt-4 mb-4 inline ">
            <a
           
                    href="mailto:{{$opportunity->email}}">
                    <button
                    class=" bg-laravel text-black mr-4 py-2 rounded-xl hover:underline gradient text-black font-bold rounded-full px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                   <i class="fa-solid fa-envelope"></i>
                    Contact Employer
                    </button>
                    </a
                >
        
                <a
                    href="{{$opportunity->website}}"
                    target="_blank">
                    <button
                    class="bg-laravel text-black mr-4 py-2 rounded-xl hover:underline gradient text-black font-bold rounded-full px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    
                    <i class="fa-solid fa-globe"></i> 
                    Visit Website
                    </button>
                    </a
                >
        </div>
        <div class=" text-lg my-4">
            
            <i class="fa-solid fa-comments-dollar"></i> {{$opportunity->amount}}
        </div>
        <div class="inline">
            <p class="mb-4"><span class="text-slate-500 text-sm">Date posted:</span>{{$opportunity->posted}}</p>
            <p ><span class="text-slate-500 text-sm">Deadline to apply:</span>{{$opportunity->deadline}}</p>
            <p class="mt-4"><i class="fa-solid fa-briefcase"></i><span class="text-slate-500 text-sm ml-3">Fulltime</span></p>
            <p class="mt-4"><span class="text-slate-500 text-sm">Stages:</span>{{$opportunity->dropdown}}</p>
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div class="flex">
            
            <div class="text-lg  w-3/5 bg-slate-200   " >
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <p class="">
                {{$opportunity->description}}
                </p>

                
            </div>
          
                
                <div class="text-lg  w-2/5 bg-slate-200 p-4 ml-4 " >
                    <h3 class="text-3xl font-bold mb-4">
                        Qualifications
                    </h3>
                    <p class="   ">
                    {{$opportunity->qualifications}}
                    </p>
                </div>
            
        </div>
    </div>
</x-card>

</div>

</x-layout>