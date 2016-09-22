<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LARAVEL WITH SENTINEL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      @if ($user = Sentinel::check())
        
         <li class="active"><a href="{{ route('users.indexlog') }}">My PROF <span class="sr-only">(current)</span></a></li>
         
      
        @else
        <li class="active"><a href="{{ route('users.create') }}">Register <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="{{ route('home.index') }}">LOGIN <span class="sr-only">(current)</span></a></li> 
          @endif
          <li class="active"><a href="{{ route('article.index') }}">FEED <span class="sr-only">(current)</span></a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>