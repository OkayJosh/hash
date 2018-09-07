<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
<body>
    <div class="container">
    <div class="links justify-content-end">
                        <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/joshua-olatunji-95524688/">LinkedIn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/okayjosh">GitHub</a>
                        </li>
                        </ul>
                    </div>
    <div class="row">
        <ul class="list-group">@foreach ($blogs as $blog)
                <li class="list-group-item">
                <div class="row"><h1>{{ $blog->title }}</h1>
                <div class="container">{{ $blog->content_of_post }}</div> 
                </div>
                    </li>
        @endforeach
                </ul>
            </div>
        </div>
    </body>
</body>
</html>