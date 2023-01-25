@extends('layouts.app')

@section('content')

<div class="container">
	<div class="mb-5">
		{{-- <div class="row justify-content-center p-5 d-flex mx-auto align-items-center justify-content-center">
			<div class=""> --}}
        {{-- <div class="gallery-wrap border border-dark bg-dark">
          <div class="img-big-wrap">
            <img src="{{Storage::url($property->image)}}"  class="d-flex mx-auto" style="img{width: 100%;height: 15vw;object-fit:cover;}" >
          </div>
          <div class="bg-dark d-flex mx-auto align-items-center justify-content-center p-2">
					<div class="">
						<h3 class="title mb-3 text-white " style="color:rgb(0, 0, 0);" id="fa-build">{{$property->address}}</h3>
							<p class="fa-solid " style="color:rgb(9, 196, 108);" id="fa-build">     {{$property->price}} $</p>
					</div>
					<ul class="text-dark">
                        <p class="card-text text-white">
                            <i class="fa-solid fa-location-dot" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->address}}
                        </p>
                        <p class="card-text text-white">
                            <i class="fa-solid fa-bed" style="color:rgb(9, 196, 108);">:</i>
                            {{$property->bedrooms}} bedrooms
                        </p>
                        <p class="card-text text-white">
                            <i class="fa-solid fa-bath" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->bathrooms}} bathrooms
                        </p>
                        <p class="card-text text-white">
                            <i class="fa-solid fa-user" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->user->name}}
                        </p>
                        <p class="card-text text-white">
                            <i class="fa-solid fa-envelope" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            Contacts {{$property->user->email}}
                        </p>
					</ul>
					<div>

						<like-button property-id="{{ $property->id }}" likes={{ $likes }}></like-button>
					</div>
                </div>
        </div> --}}
      {{-- </div>
		</div> --}}
	</div>





    <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{Storage::url($property->image)}}" alt="">
                    <div class="card-body bg-dark text-success">
                        <p class="card-text">
                            <h3 class="title mb-3 text-white " style="color:rgb(9, 196, 108);" id="fa-build">
                                {{$property->address}}
                            </h3>
                        </p>

                        <p class="card-text">
                            <p class="fa-solid " style="color:rgb(9, 196, 108);" id="fa-build">
                            ${{$property->price}}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->address}}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-bed" style="color:rgb(9, 196, 108);">:</i>
                            {{$property->bedrooms}} Bedrooms
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-bath" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->bathrooms}} Bathrooms
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->user->name}}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color:rgb(9, 196, 108);" id="fa-build">:</i>
                            Contacts: {{$property->user->email}}
                        </p>
                        <p class="card-text">
                        <like-button property-id="{{ $property->id }}" likes={{ $likes }}></like-button>
                    </p>
                    </div>
                </div>
            </div>
    </div>












	@if (count($propertyFromSameCategories) > 0)
		<div>
			<h3 class="text-dark">Similar Homes You May Like</h3>

			<div class="row">
				@foreach ($propertyFromSameCategories as $property)
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<img src="{{Storage::url($property->image)}}" alt="">
							<div class="card-body bg-dark text-success">
								<p class="card-text">
									${{$property->price}}
								</p>
								<p class="card-text">
									{{$property->address}}
								</p>
								<p class="card-text">
									{{$property->bedrooms}} Bedrooms
								</p>
								<p class="card-text">
									{{$property->bathrooms}} Bathrooms
								</p>
                                <p class="card-text">
                                    {{$property->user->name}}
                                </p>
                                <p class="card-text">
                                    Contacts: {{$property->user->email}}
                                </p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@else

	@endif
</div>

@endsection
