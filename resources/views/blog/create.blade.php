<html>
    <body>
        <form name="post" action="{!! url('/blog') !!}" method="POST">
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
        </form>
    </body>
</html>
