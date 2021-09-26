<div>
<div class="container" style="padding:30px 0;">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Settings   					
</div>
<div class="panel-body">
	@if(Session::has('message'))
		<div class="alert alert-success" role="alert">
			{{Session::get('message')}}
		</div>
	@endif
<form class="form-horizontal" wire:submit.prevent="saveSettings">
<div class="form-group">
<label class="col-md-4 control-label">Email</label>
<div class="col-md-4">
	<input type="email" placeholder="Email" class="form-control input-md" wire:model="email"/>
	@error('email') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Phone</label>
<div class="col-md-4">
	<input type="phone" placeholder="Phone" class="form-control input-md" wire:model="phone"/>
	@error('phone') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Phone2</label>
<div class="col-md-4">
	<input type="phone" placeholder="Phone2" class="form-control input-md" wire:model="phone2"/>
	@error('phone2') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>


<div class="form-group">
<label class="col-md-4 control-label">Address</label>
<div class="col-md-4">
	<input type="phone" placeholder="Address" class="form-control input-md" wire:model="address"/>
	@error('address') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Map</label>
<div class="col-md-4">
	<input type="phone" placeholder="Map" class="form-control input-md" wire:model="map"/>
	@error('map') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Twiter</label>
<div class="col-md-4">
	<input type="phone" placeholder="Twiter" class="form-control input-md" wire:model="twitter"/>
	@error('twitter') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Facebook</label>
<div class="col-md-4">
	<input type="phone" placeholder="Facebook" class="form-control input-md" wire:model="facebook"/>
	@error('facebook') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Pinterest</label>
<div class="col-md-4">
	<input type="phone" placeholder="Pinterest" class="form-control input-md" wire:model="pinterest"/>
	@error('pinterest') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Instragram</label>
<div class="col-md-4">
	<input type="phone" placeholder="Instragram" class="form-control input-md" wire:model="instragram"/>
	@error('instragram') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label">Youtube</label>
<div class="col-md-4">
	<input type="phone" placeholder="Youtube" class="form-control input-md" wire:model="youtube"/>
	@error('youtube') <p class="text-danger">{{$message}}</p> @enderror
</div>   							
</div>

<div class="form-group">
<label class="col-md-4 control-label"></label>
<button type="submit" class="btn btn-primary">Save</button>  							
</div>



</form>
</div>

</div>

</div>

</div>

</div>
</div>
