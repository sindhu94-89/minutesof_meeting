<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Minutes of Meeting</title>
</head>
<body>
	<form method="post" name="mom" action="/mom/updateMOM">
		<input type = "hidden" name = "id" value="{{$result['id']}}">
		<label for="">Meeting Name <input type="text" name = "meeting_name" value="{{$result['meeting_name']}}">
		@error('meeting_name')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<label for="">Description 
		<textarea class="form-control" id="description" name = "description">{{$result['description']}}</textarea>
		@error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<label for="">Date <input type="date" name = "meeting_date" value="{{$result['meeting_date']}}">
		@error('meeting_date')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<!-- <label for="">Time <input type="time" name = "meeting_time" value="{{$result->meeting_time}}">
		@error('meeting_time')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/> -->

		<label for="">MOM Summary 
		<textarea class="form-control" id="summary" name = "summary" value="{{$result['summary']}}"></textarea>
		@error('summary')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		@csrf
		<input type="submit" value="submit">
	</form>
</body>
</html>