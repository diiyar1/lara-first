
<form method="POST" action="/users/authi" >
    @csrf


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

    
    
    
    <button  type="submit">login</button>

    <p>don't have an email </p>
    <a  href="/register">register</a>

    </form>