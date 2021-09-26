<div>
<div class="container" style="padding:30px 0;">
<div class="row">
<div class="col-md-12">
	@if(Session::has('order_message'))
		<div class="alert alert-success" role="alert">
			{{Session::get('order_message')}}				
		</div>
			
	@endif
	<div class="panel panel-default">
		<div class="panel-heading">
<div class="row">
	<div class="col-md-6">
		Order Details
	</div>
	<div class="col-md-6">
		<a href="{{route('user.orders')}}" class="btn btn-success pull-right">My Orders</a>
		@if($orders->status == 'ordered')
			<a href="#" class="btn btn-warning pull-right" wire:click.prevent="cancelOrder" style="margin-right:20px;">Cancel Order</a>
		@endif
	</div>
</div>
</div>

<div class="panel-body">
<table class="table">
	<tr>
		<th>Order ID</th>
		<td>{{$orders->id}}</td>
		<th>Order Date</th>
		<td>{{$orders->created_at}}</td>
		<th>Status</th>
		<td>{{$orders->status}}</td>
		@if($orders->status == 'delivered')
		<th>Delivered Date</th>
		<td>{{$orders->deliverd_date}}</td>
		@elseif ($orders->status == 'canceled')
		<th>Canceled Date</th>
		<td>{{$orders->canceled_date}}</td>
		@endif
	</tr>

</table>
</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Ordered Items
</div>
<div class="panel-body">
<div class="wrap-iten-in-cart">

<h3 class="box-title">Products Name</h3>
<ul class="products-cart">						
	@foreach($orders->orderItems as $item)
	<li class="pr-cart-item">
		<div class="product-image">
			<figure><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
		</div>
		<div class="product-name">
			<a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
		</div>
		<div class="price-field produtc-price"><p class="price">${{$item->product->regular_price}}</p></div>
		<div class="quantity">
			<h5>{{$item->quantity}}</h5>
		</div>
		<div class="price-field sub-total"><p class="price">${{$item->product->regular_price * $item->quantity }}</p></div>

		@if($orders->status == 'delivered' && $item->rstatus == false)
			<div class="price-field sub-total"><p class="price"><a href="{{route('user.review',['order_item_id'=>$item->id])}}">Write Review</a></p></div>
		@endif
	</li>
	@endforeach
</ul>
</div>

<div class="summary">
<div class="order-summary">
	<h4 class="title-box">Order Summary</h4>
	<p class="summary-info"><span class="title">Subtotal</span><b class="index">${{$orders->subtotal}}</b></p>
	<p class="summary-info"><span class="title">Tax</span><b class="index">${{$orders->tax}}</b></p>
	<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
	<p class="summary-info"><span class="title">Total</span><b class="index">${{$orders->total}}</b></p>
</div>
</div>


</div>
</div>
</div>    		
</div>


<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Billing Details
</div>
<div class="panel-body">
	<table class="table">
		<tr>
			<th>First Name</th>
			<th>{{$orders->firstname}}</th>
			<th>Last Name</th>
			<th>{{$orders->lastname}}</th>				
		</tr>
		<tr>
			<th>Phone</th>
			<th>{{$orders->mobile}}</th>
			<th>Email</th>
			<th>{{$orders->email}}</th>				
		</tr>
		<tr>
			<th>Line1</th>
			<th>{{$orders->line1}}</th>
			<th>Line2</th>
			<th>{{$orders->line2}}</th>				
		</tr>
		<tr>
			<th>City</th>
			<th>{{$orders->city}}</th>
			<th>Province</th>
			<th>{{$orders->province}}</th>				
		</tr>
		<tr>
			<th>Country</th>
			<th>{{$orders->country}}</th>
			<th>Zipcode</th>
			<th>{{$orders->zipcode}}</th>				
		</tr>
	</table>
</div>
</div>
</div>    		
</div>

@if($orders->s_shipping_different)
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Shipping Details
</div>
<div class="panel-body">
<table class="table">
		<tr>
			<th>First Name</th>
			<th>{{$orders->shipping->firstname}}</th>
			<th>Last Name</th>
			<th>{{$orders->shipping->lastname}}</th>				
		</tr>
		<tr>
			<th>Phone</th>
			<th>{{$orders->shipping->mobile}}</th>
			<th>Email</th>
			<th>{{$orders->shipping->email}}</th>				
		</tr>
		<tr>
			<th>Line1</th>
			<th>{{$orders->shipping->line1}}</th>
			<th>Line2</th>
			<th>{{$orders->shipping->line2}}</th>				
		</tr>
		<tr>
			<th>City</th>
			<th>{{$orders->shipping->city}}</th>
			<th>Province</th>
			<th>{{$orders->shipping->province}}</th>				
		</tr>
		<tr>
			<th>Country</th>
			<th>{{$orders->shipping->country}}</th>
			<th>Zipcode</th>
			<th>{{$orders->shipping->zipcode}}</th>				
		</tr>
	</table>
</div>
</div>
</div>    		
</div>
@endif


<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Transaction
</div>
<div class="panel-body">
<table class="table">
	<tr>
		<th>Transaction Mode</th>
		<th>{{$orders->transaction->mode}}</th>
	</tr>
	<tr>
		<th>Status</th>
		<th>{{$orders->transaction->status}}</th>
	</tr>
	<tr>
		<th>Transaction Date</th>
		<th>{{$orders->transaction->created_at}}</th>
	</tr>
</table>
</div>
</div>
</div>    		
</div>

</div>
</div>
