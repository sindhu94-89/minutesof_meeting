<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		th, td {
		  border: 1px solid black;
		  border-radius: 10px;
		}
	</style>
	<title>Dashboard</title>
</head>
<body>
	<h4>Minutes of Meeting Dashboard</h4><h4 align="right">Welcome {{Auth::user()->name}}</h4>
	<a href="{{url('/mom/createMom')}}"> <button type="button" class="btn btn-outline-primary float-right">Add New Minutes of Meeting</button></a><br/><br/>
	<table class="table">
		<thead>
			<th>Meeting Name</th>
			<th>Description</th>
			<th>Date</th>
			<th>Time</th>
			<th>MOM Summary
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
				    <td><a href="/mom/editMOM/{{$data->id}}"><button type="button" class="btn btn-outline-primary float-right">Edit</button></a></td>
				    <td><a href="/mom/deleteMOM/{{$data->id}}"> <button type="button" class="btn btn-outline-primary float-right">Delete</button></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>