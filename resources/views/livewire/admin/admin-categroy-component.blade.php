<div>
	<div class="container" style="padding:30px 0;">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								All Categories
							</div>

							
							<div class="col-md-1">
								<a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
							</div>

						</div> 						
					</div>
					<div class="panel-body">
						@if(Session::has('message'))
						<div class="alert alert-success" role="alert">
							{{Session::get('message')}}
						</div>
						@endif
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Id</th>
									<th>Category Name</th>
									<th>Slug</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr>
									
									<td>{{$loop->index+1}}</td>
									<td>{{$category->name}}</td>
									<td>{{$category->slug}}</td>
									<td>
										<a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i class="fa fa-edit fa-2x"></i></a>  
										<a href="#" onclick="confirm('Are you sure,you want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left:20px;"></i></a>                 
									</td>
								</tr>
								@endforeach
							</tbody>   							
						</table>
						{{$categories->links('pagination::bootstrap-4')}}

					</div>

				</div>

			</div>

		</div>

	</div>
</div>

