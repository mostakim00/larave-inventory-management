@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
      <div>
        <h4>Dashboard</h4>
         <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
      </div>
  </div>    
        <div class="br-pagebody">
          <div class="row row-sm">
          <div class="col-sm-12">
             <div class="card p-3 shadow-base ">


             	<form action="{{ route('product.update',$product->id) }}" method="post">
             		@csrf
	               <div class="row">
	               	<div class="col-md-6">
	               		<div class="form-group">
	               			<label for="pname">Product Name</label>
	               			<input class="form-control" type="text" placeholder="Enter Product Name" name="pname" id="pname" value="{{ $product['name'] }}">
	               			
	               		</div>
	               			<div class="form-group">
	               			<label for="description">Product Description</label>
	               			<textarea placeholder="Enter Product Description" class="form-control" name="description" id="description" cols="30" rows="4">{{ $product->description }}</textarea>
	               		</div>

	               		<div class="form-group">
	               		<label for="Category">Category</label>
	               		<select class="form-control" name="category" id="Category">
	               			<option value="">-----Select Category-----</option>
	               			<option value="Man" @if ($product->category == 'Man') selected @endif> Man</option>
	               			<option value="Woman" @if ($product->category == 'Woman') selected @endif> Woman</option>
	               			<option value="Children" @if ($product->category == 'Children') selected @endif> Children</option>
	               		</select>
	               	</div>

	               		<div class="form-group">
	               		<label for="size">Size</label>
	               		<select class="form-control" name="size" id="size">
	               			<option value="">-----Select Size-----</option>
	               			<option value="XL" @if ($product->size =='XL') selected @endif>XL</option>
	               			<option value="L" @if ($product->size =='L') selected @endif>L</option>
	               			<option value="M" @if ($product->size =='M') selected @endif>M</option>
	               			<option value="S" @if ($product->size =='S') selected @endif>S</option>
	               		</select>
	               	  </div>
	                 </div>

	                 <div class="col-md-6">
	                 	<div class="from-group">
	                 		<label for="costPrice">Cost Price</label>
	                 		<input class="form-control" type="text" name="costPrice" id="costPrice" placeholder="Enter Product Cost Price" value="{{ $product->costPrice }}">
	                 	</div>
	                 	<div class="from-group">
	                 		<label for="salePrice">Sale Price</label>
	                 		<input class="form-control" type="text" name="salePrice" id="salePrice" placeholder="Enter Product Sale Price" value="{{ $product->salePrice }}">
	                 	</div>
	                 	<div class="from-group">
	                 		<label for="quantity">Product Quantity</label>
	                 		<input class="form-control" type="text" name="quantity" id="quantity" placeholder="Enter Product Quantity" value="{{ $product->quantity }}">
	                 	@error('quantity')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
	                 	</div>

	                 	<div class="form-group">
	               		<label for="status">Status</label>
	               		<select class="form-control" name="status" id="status">
	               			<option value="">-----Select status-----</option>
	               			<option value="1" @if ($product->status == '1') selected @endif>Active</option>
	               			<option value="2" @if ($product->status == '2') selected @endif>InActive</option>
	               		</select>
	               	  </div>
	               	  <div class="from-group">
	               	  	<button type="submit" class="form-control btn btn-info">Update Product</button>
	               	  </div>
	                 </div>
	                </div>
	             </form>
             </div>
          </div>
        </div>
      </div>      
@endsection