@include('layouts.header')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Minutes of Meeting</title>
</head>
<body>
<main class="py-4 container">
	<div style="padding-left: :200px;">
		<form method="post" enctype="multipart/form-data" name="mom" action="/mom/updateMOM">
			<input type = "hidden" name = "id" value="{{$result['id']}}">
			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="meeting_name">Meeting Name</label>
					<input type="text" class = "form-control" name = "meeting_name" value="{{$result['meeting_name']}}">
					@error('meeting_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-6">
					<label for="description">Description </label>
					<textarea class="form-control" id="description" name = "description">{{$result['description']}}</textarea>
					@error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>
			</div>
			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="date">Date</label>
					<input type="date" class= "form-control" name = "meeting_date" value="{{$result['meeting_date']}}">
					@error('meeting_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>

			<!-- <label for="">Time <input type="time" name = "meeting_time" value="{{$result->meeting_time}}">
			@error('meeting_time')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/> -->
			<div  class="form-row row">
				<div class="form-group col-md-6">
					<label for="mon_summary">MOM Summary</label> 
					<textarea class="form-control" id="summary" name = "summary" value="{{$result['summary']}}"></textarea>
					@error('summary')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-6">
					<lable for="fileupload">Image Upload</lable>
					<input type = "file" class = "form-control" name = "image">
					@error('image')<div class="alert alert-warning" role="alert">{{ $message }}</div>@enderror
					<img src="{{ asset($result->image_name) }}" class="img-fluid" alt="" width="280" height="250">
				</div>
			</div><br/>

			@csrf
			<div class="container d-flex align-items-center justify-content-center">
				<input type="submit" class="btn btn-primary" value="submit">
			</div>
		</form>
	</div>
</main>
</body>
</html>