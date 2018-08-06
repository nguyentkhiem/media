@extends('backend.master')
@section('title', 'Updata Ad')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Info Admin</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6 col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Update Info Ad
						</div>
						<div class="panel-body">
							<form method="post">
								{{-- @include('errors/note') --}}
								<div class="form-group">
									<label>Name</label> 
	    							<input type="text" name="name" class="form-control" value="{{$update->user_name}}" >
								</div>
								<div class="form-group">
									<label>Email</label> 
	    							<input type="text" name="mail" class="form-control" value="{{$update->email}}">
								</div>
								<div class="form-group">
									<label>Password</label> 
	    							<input type="password" name="pass" class="form-control" value="{{substr($update->password, 50)}}" >
								</div>
								<div class="form-group">
	    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Update">
								</div>
								<div class="form-group">
	    							<a href="{{asset('admin/manager/editAdmin/'.$update->user_id)}}" class="form-control btn btn-danger">Reset</a>
								</div>
								{{-- <div class="form-group">
	    							<a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="form-control btn btn-danger">Reset</a>
								</div> --}}
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop