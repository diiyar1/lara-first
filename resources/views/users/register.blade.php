
<form method="POST" action="/users" >
    @csrf

    <label for="name">name</label>
    <input  type="text"name="name" value="{{old('name')}}"/>
    @error('name')
        <p>{{$message}}</p>
    @enderror

    

    <label  for="email">email</label>
    <input  type="email" name="email" value="{{old('email')}}"/>
    @error('email')
        <p>{{$message}}</p>
    @enderror

    <label for="password">password</label>
    <input type="password" name="password" id="password">
    @error('password')
    <p>{{$message}}</p>
    @enderror

    
    <label for="password_confirmation">confirm password</label>
    <input type="password" name="password_confirmation" id="password_confirmation">
    @error('password_confirmation')
        <p>{{$message}}</p>
    @enderror
    
    
    
    <button  type="submit">register</button>

    <p>already have an email </p>
    <a  href="/login">login</a>

    </form>