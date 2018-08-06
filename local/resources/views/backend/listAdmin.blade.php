@extends('backend.master')
@section('title', 'Danh sách Admin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản trị</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách Admin</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Name</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
									@foreach($manager as $manager)
										<tr>
											<td>{{$manager->user_id}}</td>
											<td>{{$manager->user_name}}</td>
											<td>{{$manager->email}}</td>
										</tr>
									@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<span style="float: right; margin-right:20px; ">
						{{-- {{ $manager->links() }} --}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop