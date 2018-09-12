@extends('layouts.parent')

@section('title', 'Joshua')

@section('navigation')
    @parent
@endsection

@section('content')
@if (isset($blogs) == true){
    <div class="row full-height">
        <ul class="list-group boxshadow">
        @foreach ($blogs as $blog)
                <li class="list-group-item">
                <h1 class="wrap">{{ $blog->title }}</h1>
                <p class="wrap">{{ $blog->content_of_post }}</p> 
                    </li>
        @endforeach
                </ul>
            </div>
}
@else
   <h1> comming soon!</h1>
@endif
@endsection



