<html>
    <body>
    @foreach ($blogs as $blog)
         <a href="blog/{{$blog->title}}"><h1>{{ $blog->title }}</h1></a>   
        @endforeach
    </body>
</html>

