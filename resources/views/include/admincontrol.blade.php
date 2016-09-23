@extends('layout.default')
@section('content')
<div class ="container">
<h3>READ</h3>
<h2>USER LIST</h2>

  <p></p></br>
<div class="container col-xs-4">
                {!! Form::open(['method'=>'GET','url'=>'searchuser','role'=>'search'])  !!}
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
                        <span class="input-group-btn">
					        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Search</button>
					     </span>
                     </span>
                 </div>
                 {!! Form::close() !!}
            </div>
  <table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Username</th>

			<!-- <th>Action</th>	 -->
		</tr>
	</thead>

	<tbody>
	@foreach($user as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->email}}</td>
			<td>{{$users->username}}</td>
			<td>
		
				<form method="POST" action="{{ route('users.destroy', $users->id) }}" accept-charset="UTF-8">  
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
					
	              	
	                <input onclick="return confirm('Are u sure ?');" type="submit" value="DELETE" class="btn btn-danger"/>
	            </form>
			</td>	
		</tr>
	@endforeach
	</br></br></br>
	{{ $user->links() }}
	</tbody>
</table>
  
  </div>
@stop