
<form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label name="title" for="title">title</label>
    <input id="title" type="text"name="title" value="{{$listing->title}}"/>
    @error('title')
        <p>{{$message}}</p>
    @enderror

    <label name="company" for="company">company</label>
    <input id="company" type="text"name="company"  value="{{$listing->company}}"/>
    @error('company')
        <p>{{$message}}</p>
    @enderror
    

    <label name="location" for="location">location</label>
    <input id="location" type="text"name="location" value="{{$listing->location}}"/>
    @error('location')
        <p>{{$message}}</p>
    @enderror

    <label name="email" for="email">email</label>
    <input id="email" type="text" name="email" value="{{old($listing->email)}}"/>
    @error('email')
        <p>{{$message}}</p>
    @enderror

    <label name="website" for="website">website</label>
    <input id="website" type="text" name="website" value="{{$listing->website}}"/>
    @error('website')
        <p>{{$message}}</p>
    @enderror

    <label name="tags" for="tags">tags</label>
    <input id="tags" type="text"name="tags" value="{{$listing->tags}}"/>
    @error('tags')
        <p>{{$message}}</p>
    @enderror
    
    <label name="logo" for="logo">logo</label>
    <input id="logo" type="file" name="logo" />
    <img width="40px" height="40px"
    src="{{ $listing->logo ? asset(Storage::url( $listing->logo)) : asset('/imgs/lara2.png') }}">

    
    <label name="description" for="description">description</label>
    <textarea id="description" name="description" >{{$listing->description}}</textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror
    
    
    
    
    <button  type="submit">post again</button>
    </form>