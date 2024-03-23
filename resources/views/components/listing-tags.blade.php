@props(['tagsCsv'])

@php
   $tags = explode(',', $tagsCsv); 
@endphp

@foreach ($tags as $tag )

<h3>
    <a href="/?tag={{$tag}}"> {{$tag}} </a>
</h3>
@endforeach