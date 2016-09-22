@extends('layout.default')
@section('content')
<div class ="container">
<h3>READ</h3>
<h2>FEED</h2>

  <p>Article FEED</p></br>
<div class="container col-xs-4">
                {!! Form::open(['method'=>'GET','url'=>'searcharticle','role'=>'search'])  !!}
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
			<th>AUTHOR</th>
			<th>FEED</th>
			@if ($user = Sentinel::check())
			 @if ( Sentinel::hasAccess('admin.index'))
			<th>Action</th>
			@endif
			@endif

			<!-- <th>Action</th>	 -->
		</tr>
	</thead>

	<tbody>
	@foreach($data as $datas)
		<tr>
			<td>{{$datas->user_id}}</td>
			<td>{{$datas->user_email}}</td>
			<td>{{$datas->article}}</td>
			<td>
			@if($user = Sentinel::check())
			@if ( Sentinel::hasAccess('admin.index'))
				<form method="POST" action="{{ route('article.destroy', $datas->id) }}" accept-charset="UTF-8"> 
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
					
	              	
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
	            </form>
	            @endif
	            @endif
			</td>	
		</tr>
	@endforeach
	</br></br></br>
	{{ $data->links() }}
	</tbody>
</table>
  
  </div>
@stop