@include('layouts.header')
<main class="py-4 container">
	<div style="padding-left: :200px;">
		<form method="post" enctype="multipart/form-data" name="mom" action="/mom/createMomPost">
			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="meeting_name">Meeting Name</label>
					<input type="text" class="form-control" name = "meeting_name" value="{{old('meeting_name')}}">
					@error('meeting_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>

				<div class="form-group col-md-6">
					<label for="description">Description </label>
					<textarea class="form-control" id="description" name = "description" value="{{old('description')}}"></textarea>
					@error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>
			</div>

			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="date">Date</label>
					<input type="date" class = "form-control" name = "meeting_date" value="{{old('meeting_date')}}">
					@error('meeting_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>

				<div class="form-group col-md-6">
					<label for="tiem">Time</label>
					<input type="time" class = "form-control" name = "meeting_time" value="{{old('meeting_time')}}">
					@error('meeting_time')<div class="alert alert-danger">{{ $message }}</div>@enderror
				</div>
			</div>
			<div  class="form-row row">
				<div class="form-group col-md-6">
					<lable for="fileupload">Image Upload</lable>
					<input type = "file" class = "form-control" name = "image">
					@error('image')<div class="alert alert-warning" role="alert">{{ $message }}</div>@enderror
				</div>
			</div>
			<br/>


			@csrf
			<div class="container d-flex align-items-center justify-content-center">
				<input type="submit"  class="btn btn-primary" value="Submit">
			</div>
		</form>
		@if(isset($result))
			{{json_encode($result)}}
		@endif
	</div>
</main>