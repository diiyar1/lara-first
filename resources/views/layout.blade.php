<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs</title>
</head>
<body>
    <h1>Gigs</h1>
    <!-- view content -->
    @auth
        {{auth()->user()->name}}
   
        
    <a href="/listings/manager"><button>listings</button></a>
    <form action="/logout" method="post">
    @csrf
        <button type="submit">logot</button>
   </form>
    @else
        
    <a href="/register"><button>register</button></a>
    <a href="/login"><button>login</button></a>  
    @endauth
    
    @yield('content')
</body>
</html>