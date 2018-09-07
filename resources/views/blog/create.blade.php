<html>
    <body>
        <!-- <form name="post" action="{!! url('/blog') !!}" method="POST">
        <h1>Enter the details of the Post</h1>
        <div>
            <div>
                <div><label>Title<label></div>
                <div><input type="text" name="title" size="42"></div>
            </div>
            <div>
                <div><label>Content<label></div>
                <div><textarea type="text" name='content' rows="10" cols="50"></textarea></div>
            </div>
            <div>
            <button type="submit" name="create">Create</button>
            </div>
        </div>
        </form>  -->
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
    </body>
</html>

