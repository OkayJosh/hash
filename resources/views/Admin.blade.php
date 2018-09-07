<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin --control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
    <form method="POST" action="/blog">
    {!! csrf_field() !!}
    <div>
        <div>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            Content
            <textarea type="text" name="content" value="{{ old('content') }}" rows="10" cols="50"> </textarea>
        </div>

        <div>
            <button type="submit">create</button>
        </div>
    </div>
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok"></span>
        <em> {!! session('flash_message') !!}</em></div>
            @endif
</form>
    </div>
    <div class="row">
    </div> 
</div>
</body>
</html>