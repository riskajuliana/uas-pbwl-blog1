@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: #3f8adb;
		}

		.btn, .form-control {
			color: white;
		}

		label {
			color: #3f8adb;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
<h2></h2>
<div class="alert alert-primary" role="alert">
  <h2>Edit Data Album </h2>
</div>
	
	<form action="{{ url('/album/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-5">	
			<select name="album_pho_id" class="form-control" style="background-color: #3f8adb">
					@foreach($pho as $row)
					<option value="{{$row->id}}"

						@if($row->id ==$rows->album_pho_id)
						selected
						@endif
						>{{$row->pho_tittle}}</option>
					@endforeach
				</select>
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">	
			<input type="text" name="album_name" value="{{ $rows->album_name}}" id="inputEmail3" class="form-control" style="background-color: #3f8adb">
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">	
			<input type="text" name="album_text" value="{{ $rows->album_text}}" id="inputEmail3" class="form-control" style="background-color: #3f8adb">
		</div>
		</div>

	</table>
	<div class="form-group row">
			<div class="col-sm-10">
			<input type="submit" value="UPDATE" class="btn" style="background-color: gray">
		</div>
	</div>
	</form>
</div>
</body>
</html>

@endsection