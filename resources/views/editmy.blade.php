@extends('layouts.app')

@section('content')
<div class="container-fluid " id="container-wrapper">

	<!-- Breadcrumb -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Property</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item text-gray"><a href="/">Home</a></li>

		</ol>
	</div>


	<div class="row">

		<div class="card " >

			<!-- Session messages -->
			@if (Session::has('message'))
				<div class="alert alert-success">
					{{Session::get('message')}}
				</div>
			@endif

			<div class="card mb-6 ">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Edit Property</h6>
				</div>
				<div class="card-body ">

					<!-- Form -->
					<form action="{{route('my.update', [$property->id])}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="price">Price</label>
							<input
								type="number"
								name="price"
								class="form-control @error('price') is-invalid @enderror"
								placeholder="Enter price of property"
								value="{{$property->price}}"
							>
							@error('price')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="address">Address</label>
							<input
								type="text"
								name="address"
								class="form-control @error('address') is-invalid @enderror"
								placeholder="Enter address of property"
                                maxlength="40"
								value="{{$property->address}}"
							>
							@error('address')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name">Bedrooms</label>
							<input type="number" name="bedrooms" class="form-control @error('bedrooms') is-invalid @enderror"	placeholder="Enter number of bedrooms"
							value="{{$property->bedrooms}}">
							@error('bedrooms')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name">Bathrooms</label>
							<input type="number" name="bathrooms" class="form-control @error('bathrooms') is-invalid @enderror"	placeholder="Enter number of bathrooms" value="{{$property->bathrooms}}">
							@error('bathrooms')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="description">Choose Category</label>
							<select name="category" class="form-control @error('category') is-invalid @enderror">
								<option value="">Select</option>
								@foreach (App\Models\Category::all() as $key => $category)
									<option
										value="{{$category->id}}"
										 {{--if id of category equals category_id of property then selected  --}}
										@if ($category->id == $property->category_id)
											selected
										@endif
									>
										{{$category->name}}
									</option>
								@endforeach
							</select>
                        </div>
						{{-- <div class="form-group">
							<label for="description">Choose Subcategory</label>
							<select name="subcategory" class="form-control @error('subcategory') is-invalid @enderror">
								<option value="">Select</option>
								@foreach (App\Models\Subcategory::all() as $subcategory)
									<option
										value="{{$subcategory->id}}"
									>
										{{$subcategory->num_bedrooms}}
									</option>
								@endforeach
							</select>

							@error('category')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div> --}}

						<div class="form-group">
							<img src="{{Storage::url($property->image)}}"  width="1" height="1">
							<div class="custom-file mt-2">
								<input
									type="file"
									name="image"
									class="custom-file-input @error('image') is-invalid @enderror"
									id="customFile"
								>
								<label class="custom-file-label" for="customFile">Choose image</label>
								@error('image')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
	</div>
	<!--Row-->

</div>

@endsection
