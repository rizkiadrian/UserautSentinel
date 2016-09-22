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
				
			</td>	
		</tr>
	@endforeach
	</tbody>
</table>
  
  </div>
@endsection