<div>

<div class="container" style="padding:30px 0;">
	@if(Session::has('message'))
<div class="alert alert-success" role="alert">
	{{Session::get('message')}}	
</div>
@endif
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<div class="row">
<div class="col-md-6">All Products</div>
<div class="col-md-6"><a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New</a></div>
</div>
</div>
<div class="panel-body">
<table class="table table-stripped">
<thead>
<tr>
<th>Id</th>
<th>Image</th>
<th>Name</th>
<th>Stock</th>
<th>Price</th>
<th>Sale Price</th>
<th>Category</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{$loop->index+1}}</td>
<td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"></td>
<td>{{$product->name}}</td>
<td>{{$product->stock_status}}</td>
<td>{{$product->regular_price}}</td>
<td>{{$product->sale_price}}</td>
<td>{{$product->category->name}}</td>
<td>{{$product->created_at}}</td>
<td>
<a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
<a href="#" onclick="confirm('Are you sure,you want to delete this category?') || event.stopImmediatePropagation()" style="margin-left:20px;" wire:click.prevent="deleteProduct('{{$product->id}}')"><i class="fa fa-times fa-2x text-danger"></i></a>
</td>
</tr>
@endforeach
</tbody>
</table>
{{$products->links('pagination::bootstrap-4')}}
</div>
</div>
</div>
</div>

</div>
</div>
