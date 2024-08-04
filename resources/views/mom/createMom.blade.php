<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Minutes of Meeting</title>
</head>
<body>
	<form method="post" name="mom" action="/mom/createMomPost">
		<label for="">Meeting Name <input type="text" name = "meeting_name" value="{{old('meeting_name')}}">
		@error('meeting_name')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<label for="">Description 
		<textarea class="form-control" id="description" name = "description" value="{{old('description')}}"></textarea>
		@error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<label for="">Date <input type="date" name = "meeting_date" value="{{old('meeting_date')}}">
		@error('meeting_date')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		<label for="">Time <input type="time" name = "meeting_time" value="{{old('meeting_time')}}">
		@error('meeting_time')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

		@csrf
		<input type="submit" value="submit">
	</form>
	@if(isset($result))
		{{json_encode($result)}}
	@endif
</body>
</html>