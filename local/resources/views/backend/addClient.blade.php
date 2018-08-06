@extends('backend.master')
@section('title', 'Thêm người dùng')
@section('main')
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý người dùng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm người dùng</div>
					<div class="panel-body">
						{{-- @include('errors.note') --}}
						<form method="post" enctype="multipart/form-data" role="form">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên người dùng</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Địa chỉ mail</label>
										<input required type="email" name="email" class="form-control" value="">
									</div>
									<div class="form-group" >
										<label>Password</label>
										<input required type="password" name="password" class="form-control" value="">
									</div>
									<div class="form-group" >
										<label>Ảnh đại diện</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									 <div class="form-group">
                                    <label>Cấp độ</label>
                                    <select name="level" class="form-control">
                                        <option value="1">User 1</option>
                                        <option value="2">User 2</option>
                                        <option value="3" selected="selected">User 3</option>
                                    </select>
                                </div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/user/add')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop