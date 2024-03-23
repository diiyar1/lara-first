
<form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf

    <label name="title" for="title">title</label>
    <input id="title" type="text"name="title" value="{{old('title')}}"/>
    @error('title')
        <p>{{$message}}</p>
    @enderror

    <label name="company" for="company">company</label>
    <input id="company" type="text"name="company"  value="{{old('company')}}"/>
    @error('company')
        <p>{{$message}}</p>
    @enderror
    

    <label name="location" for="location">location</label>
    <input id="location" type="text"name="location" value="{{old('location')}}"/>
    @error('location')
        <p>{{$message}}</p>
    @enderror

    <label name="email" for="email">email</label>
    <input id="email" type="text" name="email" value="{{old('email')}}"/>
    @error('email')
        <p>{{$message}}</p>
    @enderror

    <label name="website" for="website">website</label>
    <input id="website" type="text" name="website" value="{{old('website')}}"/>
    @error('website')
        <p>{{$message}}</p>
    @enderror

    <label name="tags" for="tags">tags</label>
    <input id="tags" type="text"name="tags" value="{{old('tags')}}"/>
    @error('tags')
        <p>{{$message}}</p>
    @enderror
    
    <label name="logo" for="logo">logo</label>
    <input id="logo" type="file" name="logo" />
    
    
    <label name="description" for="description">description</label>
    <textarea id="description" name="description" >{{old('description')}}</textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror
    
    
    
    
    <button  type="submit">post</button>
    </form>