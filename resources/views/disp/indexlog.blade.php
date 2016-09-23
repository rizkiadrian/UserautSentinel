@extends('layout.default')
@section('content')
<div class = container>

@if ($user = Sentinel::check())

   <a href="{{ route('home.logout') }}">Logout</a>
   <h3>Hello {{$user->username}}</h3>

   
   <a href="{{ route('article.create') }}" class="btn btn-danger">Create Article</a>
   @if ( $user->inRole('admin'))
   <a href="{{ route('admin.index') }}" class="btn btn-danger">ADMIN ONLY</a>
   @else
   <h3>yourenotadmin</h3>
   @endif
  @else

    <h3><a href="{{ route('home.index') }}">Login</a></h3>

  @endif
 

</div>
<!---end carousel-->
@stop

