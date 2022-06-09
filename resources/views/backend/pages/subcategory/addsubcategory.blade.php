@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
      <div>
        <h4>Sub-Category</h4>
         <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
      </div>
  </div>    
        <div class="br-pagebody">
          <div class="row row-sm">
          <div class="col-sm-12">
             <div class="card p-3 shadow-base ">


             	<form action="{{Route('subcategory.store')}}" method="post" enctype="multipart/form-data">
             		@csrf

	               <div class="row">
	               	<div class="col-md-6">
						   <div class="form-group">
							   <label for="catId">Select Category</label>
							   <select name="catId" id="catId" class="form-control">
								   <option value="">----Select Catrgory----</option>
								   @foreach($category as $cat)
								   <option value="{{ $cat->id }}">{{ $cat->name }}</option>
								   @endforeach
							   </select>
							   <span class="text-danger">
										@error('catId')
										    {{$message}}
										@enderror
	                		</span>
						   </div>
	               		<div class="form-group">
	               			<label for="subCatName">Sub-Category Name</label>
	               			<input class="form-control" type="text" placeholder="Enter Sub-Catrgory Name" name="subCatName" id="subCatName" value="{{old('subCatName')}}">
	               			<span class="text-danger">
										@error('subCatName')
										    {{$message}}
										@enderror
	                		</span>
	               		</div>

	               			<div class="form-group">
	               			<label for="des">Product Description</label>
	               			<textarea placeholder="Enter Sub Category Description" class="form-control" name="des" id="des" cols="30" rows="4">{{old('des') }}</textarea>
	               		<span class="text-danger">
										@error('des')
										    {{$message}}
										@enderror
	               		</span>
	               		</div>
						   
	             </div>
	                 <div class="col-md-6">
	                 	<div class="from-group">
	                 		<label for="image">Sub Category Image</label>
	                 		<input class="form-control" type="file" name="image" id="image" placeholder="Select image">

							 <span class="text-danger">
										@error('image')
										    {{$message}}
										@enderror
	                		</span>
						</div>

	                 	<div class="form-group">
	               		<label for="status">Status</label>
	               		<select class="form-control" name="status" id="status">
	               			<option value="">-----Select status-----</option>
	               			<option value="1">Active</option>
	               			<option value="2">InActive</option>
	               		</select>
	               	  </div>
	               	  <div class="from-group">
	               	  	<button class="form-control btn btn-info">Add Product</button>
	               	  </div>
	                 </div>
	                </div>
	             </form>
             </div>
          </div>
        </div>
      </div>      
@endsection