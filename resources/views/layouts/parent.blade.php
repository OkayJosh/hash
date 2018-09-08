<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    @section('navigation') 
    <div class="links justify-content-end">
                        <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
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
        @show

        <div class="container">
            @yield('content')
        </div>
    
</body>
</html> 