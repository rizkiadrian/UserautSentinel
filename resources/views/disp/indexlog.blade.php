@extends('layout.default')
@section('content')
<div class = container>

@if ($user = Sentinel::check())

   <a href="{{ route('home.logout') }}">Logout</a>
   <h3>Hello {{$user->username}}</h3>

   <a href="{{ route('sets.assignRole') }}" class="btn btn-success">SET ROLE</a>
   <a href="{{ route('article.create') }}" class="btn btn-danger">Create Article</a>
   @if ( Sentinel::hasAccess('admin.index'))
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

