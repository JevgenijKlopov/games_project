<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/front/welcome_page.css')}}">
</head>
<body>
    <main>
        <h1>Welcome Stranger</h1>
        <div>
            {{-- <h2><a href="{{route('admin.games.index')}}">Admin Page</a></h2> --}}
            <h2><a href="{{route('user.games.index')}}">Continue to Page</a></h2>
        </div>  
    </main>
</body>
</html>