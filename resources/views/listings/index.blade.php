@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')


@if (count($listings) == 0)
    <p>No Listings Found</p>
@endif

@foreach ($listings as $listing )
<x-listing-card :listing="$listing"/>
@endforeach

<div style="width: 20px">{{$listings->links()}}</div>

<a href="/listings/create/">post gig</a> 

@endsection