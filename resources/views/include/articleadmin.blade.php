@extends('layout.default')
@section('content')
<div class ="container">
<h3>READ</h3>
<h2>FEED</h2>
  <p>Article FEED</p>
  <table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>AUTHOR</th>
			<th>FEED</th>
			<th>Action</th>

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
				<form method="POST" action="{{ route('article.destroy', $datas->id) }}" accept-charset="UTF-8"> 
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
					
	              	
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
	            </form>
			</td>	
		</tr>
	@endforeach
	</tbody>
</table>
  
  </div>
@endsection