@section('title')
    Main page
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="/">Main page</a></li>
                <li><a href="{{route('contacts.index')}}">Contacts</a></li>
                <li><a href="{{route('about.index')}}">About us</a></li>
                <li><a href="{{route('goods.index')}}">Goods</a></li>
                <li><a href="{{route('posts.index')}}">Posts</a></li>
            </ul>
        </nav>
    </div>
    
    @yield('content')
    
</body>
</html>