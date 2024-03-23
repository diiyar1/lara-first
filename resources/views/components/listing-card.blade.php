@props(['listing'])

{{-- {{ dd($listing->logo) }} --}}
<img width="40px" height="40px"
 src="{{ $listing->logo ? asset(Storage::url( $listing->logo)) : asset('/imgs/lara2.png') }}">

 <h2>
    <a href="/listings/{{$listing->id}}">{{$listing -> title}}</a>
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
<x-listing-tags :tagsCsv="$listing -> tags" />
<p>
    {{$listing['description']}}
</p>