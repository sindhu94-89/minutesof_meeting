@include('layouts.header')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
	<h4>Minutes of Meeting Dashboard</h4>
	<!-- <a align="right" href="{{url('/logout')}}"> <button type="button" class="btn btn-secondary float-right">Logout</button></a><br/> -->
	<!-- <h4 align="right">Welcome {{Auth::user()->name}}</h4><br/> -->
	<a href="{{url('/mom/createMom')}}"> <button type="button" class="btn btn-primary float-left">Add New Minutes of Meeting</button></a><br/><br/>
	<table class="table">
		<thead>
			<th>Meeting Name</th>
			<th>Description</th>
			<th>Date</th>
			<th>Time</th>
			<th>MOM Summary</th>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($result as $data)
				<tr>
					<td>{{ $data->meeting_name }}</td>
				    <td>{{ $data->description }}</td>
				    <td>{{ $data->meeting_date }}</td>
				    <td>{{ $data->meeting_time }}</td>
				    <td>{{ $data->summary }}</td>
				    <td><img src="{{ asset($data->image_name) }}" class="img-fluid" alt="{{ $data->meeting_name }}" width="70px" height="40px"></td>
				    <td><a href="/mom/editMOM/{{$data->id}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
				    <td><a href="/mom/deleteMOM/{{$data->id}}"> <button type="button" class="btn btn-danger">Delete</button></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>