@extends ('layouts.parent')

@section ('title','Home')

<!-- inheriting layout -->
@section('navigation') 
    @parent
@endsection


<!-- Main Content -->
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
                
              </h2>
              <h3 class="post-subtitle">
                
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
          <hr>
          
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
@endsection


