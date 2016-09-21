@extends('layout.default')
@section('content')
<div class = container>

@if ($user = Sentinel::check())

   <a href="/home">Logout</a>
   <h3>Hello {{$user->username}}</h3>

   <a href="{{ route('sets.assignRole') }}" class="btn btn-success">SET ROLE</a>
   <a href="{{ route('sets.addPermission') }}" class="btn btn-danger">SET PERMISSION</a>
   @if ( Sentinel::hasAccess('admin.index'))
   <a href="{{ route('admin.index') }}" class="btn btn-danger">ADMIN ONLY</a>
   @else
   <h3>yourenotadmin</h3>
   @endif
  @else

    <li>{!! link_to('login', 'Login') !!}</li>

  @endif
 

</div>
<!---end carousel-->
@stop

