listings

@unless ($listings->isEmpty())
@foreach ($listings as $listing)
<h2>
    {{$listing['title']}}
</h2>

<x-listing-tags :tagsCsv="$listing -> tags" />
   <a href="/listings/{{$listing->id}}/edit"> <button>edit</button></a>

   <form action="/listings/{{$listing->id}}" method="post">
    @csrf
    @method('DELETE')
    <button>delete</button>
   </form>
@endforeach 
    
@else
    <h1>No Listings Found</h1>  
@endunless