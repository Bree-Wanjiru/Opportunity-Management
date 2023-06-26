{{-- get the layout --}}
<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4 ">

{{-- check opportunities --}}
@unless(count($opportunities)==0)

@foreach($opportunities as $opportunity)

{{-- access the card component --}}
<x-opportunity-card :opportunity="$opportunity"/>

@endforeach
   
@else
    <p>No opportunities found</p>
@endunless

</div>

{{-- pagination --}}
<div class="mt-6 p-4">
    {{$opportunities->links()}}
</div>

</x-layout>


