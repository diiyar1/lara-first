@extends('layout')

@section('content')
@include('partials._search')


 
    <h2>
        {{$listing['title']}}
    </h2>
    <h3>
        {{$listing -> company}}
    </h3>
    <h3>
        {{$listing -> location}}
    </h3>
    <h3>
        {{$listing -> email }}
    </h3>
    <h3>
        {{$listing -> website }}
    </h3>
    <h3>
        {{$listing -> company}}
    </h3>
    
    <p>
        {{$listing -> description}}
    </p>
    @auth
    @if ($listing->user_id == auth()->id())
    <x-listing-tags :tagsCsv="$listing -> tags" />
        <a href="/listings/{{$listing->id}}/edit"> <button>edit</button></a>
 
        <form action="/listings/{{$listing->id}}" method="post">
         @csrf
         @method('DELETE')
         <button>delete</button>
        </form> 
    @endif
    gdhfg
    @endauth
  
    
@endsection