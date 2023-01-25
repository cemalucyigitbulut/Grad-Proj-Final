@extends('layouts.app')


@section('content')


{{-- style="background:url({{asset('admin/img/k9.jpeg')}})" --}}



<div class="CoverImg">


  <div class="main2">
    <button id="navbar-button2"><a href="/show" class="text-dark">Click To Go Search<a></button>
    </div>

   <div class="boxy">
    <div class="littlebox">
     <div class="search-container">

      @if (request()->segment(1) == 'search')
				<h2>Properties in {{request()->address}}</h2>
			@else
			@endif

      <form action="{{ route('search') }}" method="get">


            <div class="select"  id="select-1">
              <label for="Home-icon"><i class="fa fa-map-marker" style="font-size:48px;color:rgb(9, 196, 108);"></i></label>
              <!-- Filter by address -->

              <input class="form-control" type="text" name="address" placeholder="Enter a location" value="{{request()->address}}">

            </div>

            <div class="select" id="select-2">
              <label for="Home-icon"><i class="fa fa-home" style="font-size:48px;color:rgb(9, 196, 108);"></i></label>
              <!-- Filter by category -->
                <select name="category" class="form-select @error('category') is-invalid @enderror">
                  <option value="" selected>{{request()->category ? App\Models\Category::find(request()->category)->name : 'All Home Types'}}</option>
                  @foreach (App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">
                      {{$category->name}}
                    </option>
                  @endforeach
                </select>
            </div>


            <div class="select" id="select-3">

              <label for="Home-icon"><i class="fa-solid fa-bed" style="font-size:48px;color:rgb(9, 196, 108);"></i></label>
              <!-- Filter by bedrooms -->

                <select name="bedrooms" class="form-select @error('bedrooms') is-invalid @enderror">
                  <option value="" selected>{{request()->bedrooms ? request()->bedrooms . ' ' . 'All Bedrooms' : 'Bedrooms'}}</option>
                  <option value="0">
                    0
                  </option>
                  <option value="1">
                    1
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                </select>

            </div>

            <div class="select" id="select-5">

              <label for="Home-icon"><i class="fa fa-money-bill-trend-up" style="font-size:48px;color:rgb(9, 196, 108);"></i></label>

              <input value="{{request()->max}}" type="text" name="max" class="form-control" placeholder="Max Price">

            </div>



            <div class="select" id="select-6">

              <label for="Home-icon"><i class="fa fa-down-long" style="font-size:48px;color:rgb(9, 196, 108);"></i></label>

              <input value="{{request()->min}}" type="text" name="min" class="form-control" placeholder="Min Price">

            </div>

            <button type="submit" id="subbutton">Search<label for="Home-icon" id="search-icon"><i class="fa fa-search" style="font-size:18px;color:rgb(75, 73, 73);"></i></label> </button>
            {{-- <button type="submit" id="subbutton3"><a href="{{request()->url()}}"></a>Reset Search</button> --}}


          </form>
      </div>
     </div>
   </div>
  </div>








  <!--
- #SERVICE
-->

<section class="service" id="service">
<div class="container">

  <p class="section-subtitle">Services</p>

  <h2 class="h2 section-title">You can search by</h2>

  <ul class="service-list">

    <li>
      <div class="service-card">

        <div class="card-icon">
          <img src="img/Iconss1-removebg-preview.png" alt="Service icon">
        </div>

        <h3 class="h3 card-title">
          <p href="#">Search By Location</p>
        </h3>

        <p class="card-text">
          You can search homes for sale available on the website by its location, we can match you with a house you will want
          to call home.
        </p>

        <a href="#" class="card-link">
          <span>Search by Location<a href="{{request()->url()}}"></a></span>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>

      </div>
    </li>

    <li>
      <div class="service-card">

        <div class="card-icon">
          <img src="img/icon2-removebg-preview.png" alt="Service icon" id="icon2">
        </div>

        <h3 class="h3 card-title">
          <p href="#">Search By Price</p>
        </h3>

        <p class="card-text">
          You can search homes for sale available on the website by its price, we can match you with a house you will want
          to call home.
        </p>

        <a href="#" class="card-link">
          <span>Search by Price<a href="{{request()->url()}}"></a></span>

          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>

      </div>
    </li>

    <li>
      <div class="service-card">

        <div class="card-icon">
          <img src="img/icon3-removebg-preview.png" alt="Service icon">
        </div>

        <h3 class="h3 card-title">
          <p href="#">Search By House Type</p>
        </h3>

        <p class="card-text">
          You can search homes for sale available on the website by its type, we can match you with a house you will want
          to call home.
        </p>

        <a href="#" class="card-link">
          <span>Search by Type<a href="{{request()->url()}}"></a></span>

          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>

      </div>
    </li>

  </ul>

</div>
</section>








<!-- ======= Agents Section ======= -->
<section class="section-agents section-t8" style="background-color:rgb(34, 33, 33);">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="title-wrap d-flex justify-content-between">
      <div class="title-box">
        <h2 class="title-a">Our Admins</h2>
      </div>

      <div class="title-link">
        {{-- <a href="#">All Agents --}}
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card-box-d">
      <div class="card-img-d">
        <img src="img/bargın.PNG" alt="" class="img-d img-fluid">
      </div>
      <div class="card-overlay card-overlay-hover">
        <div class="card-header-d">
          <div class="card-title-d align-self-center">
            <h3 class="title-d">
                <a href="http://127.0.0.1:8000/chatify/3" class="link-two">Barkın Sevinç</a>
              <br>
            </h3>
          </div>
        </div>
        <div class="card-body-d">

          <div class="info-agents color-a">
            <p>
                <strong>Phone: </strong> +90 532 862 1124
            </p>
            <p>
                <strong>Email: </strong> barkin@barkin.com
            </p>
          </div>
        </div>
        <div class="card-footer-d">
          <div class="socials-footer d-flex justify-content-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card-box-d">
      <div class="card-img-d">
        <img src="img/berdu2.PNG" alt="" class="img-d img-fluid">
      </div>
      <div class="card-overlay card-overlay-hover">
        <div class="card-header-d">
          <div class="card-title-d align-self-center">
            <h3 class="title-d">
              <a href="http://127.0.0.1:8000/chatify/1" class="link-two">Bertu Güneşlier</a>
              <br>
            </h3>
          </div>
        </div>
        <div class="card-body-d">

          <div class="info-agents color-a">
            <p>
                <strong>Phone: </strong> +90 530 830 4232
            </p>
            <p>
                <strong>Email: </strong> bguneslier@gmail.com
            </p>
          </div>
        </div>
        <div class="card-footer-d">
          <div class="socials-footer d-flex justify-content-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card-box-d">
      <div class="card-img-d">
        <img src="img/deyuuuumm.PNG" alt="" class="img-d img-fluid">
      </div>
      <div class="card-overlay card-overlay-hover">
        <div class="card-header-d">
          <div class="card-title-d align-self-center">
            <h3 class="title-d">
              <a href="http://127.0.0.1:8000/chatify/5" class="link-two">Baran Topçınar</a>
              <br>
            </h3>
          </div>
        </div>
        <div class="card-body-d">

          <div class="info-agents color-a">
            <p>
                <strong>Phone: </strong> +90 533 859 7168
            </p>
            <p>
                <strong>Email: </strong> brntpcnr@gmail.com
            </p>
          </div>
        </div>
        <div class="card-footer-d">
          <div class="socials-footer d-flex justify-content-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="link-one">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section><!-- End Agents Section -->



<br>
<br>





<!--
- #PROPERTY
-->

<section class="property" id="property">
<div class="container">

  <p class="section-subtitle">Properties</p>

  <h2 class="h2 section-title">Featured Listings</h2>

  <ul class="property-list has-scrollbar">

    <!-- ilk property son foreach -->


   <!-- ilk property son foreach -->
   <ul class="property-list has-scrollbar">
    @foreach ($properties as $property)
    <li>
        <div class="property-card">
          <figure class="card-banner">
            <a href="{{route('frontproperty.show', [$property->id])}}">
              <img src="{{Storage::url($property->image)}}" alt="" class="w-100">
            </a>
          </figure>
          <div class="card-content">
            <div class="card-price">
              <strong>${{$property->price}}</strong>
            </div>
            <h3 class="h3 card-title">
              <a href="{{route('frontproperty.show', [$property->id])}}">{{$property->address}}</a>
            </h3>
            <ul class="card-list">
              <li class="card-item">
                <i class="fa-solid fa-bed"></i>
                <span>{{$property->bedrooms}}</span>
              </li>
              <li class="card-item">
                <i class="fa-solid fa-bath"></i>
                <span>{{$property->bathrooms}}</span>
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-author">
              <div>
                <p class="author-name">
                  <a href="http://127.0.0.1:8000/chatify">{{$property->user->name}}</a>
                </p>
                <p class="author-title">{{$property->user->email}} Estate Agents</p>
              </div>

            </div>
            <div class="card-footer-actions ">
              <like-button class="btn-success"
              property-id="{{ $property->id }}"
										likes={{ $likes = auth()->user() ? auth()->user()->like->contains($property->id) : false }}>
              </like-button>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
</div>
</section>

<script>
    window.onscroll = function () {

    };
 </script>





   <!--
- #FOOTER
-->

<footer class="footer">

<div class="footer-top">
<div class="container">

<div class="footer-brand">

  <a href="#" class="logo">
    <img src="img/ShortcutIcon.png" alt="logo">
  </a>

</div>

<div class="footer-link-box">

  <ul class="footer-list">

    <li>
      <p class="footer-list-title">Company</p>
    </li>

    <li>
      <a href="#" class="footer-link">About</a>
    </li>

    <li>
      <a href="#" class="footer-link">Blog</a>
    </li>

    <li>
      <a href="#" class="footer-link">All Products</a>
    </li>

    <li>
      <a href="#" class="footer-link">Locations Map</a>
    </li>

    <li>
      <a href="#" class="footer-link">FAQ</a>
    </li>

    <li>
      <a href="#" class="footer-link">Contact us</a>
    </li>

  </ul>

  <ul class="footer-list">

    <li>
      <p class="footer-list-title">Services</p>
    </li>

    <li>
      <a href="#" class="footer-link">Order tracking</a>
    </li>

    <li>
      <a href="#" class="footer-link">Wish List</a>
    </li>

    <li>
      <a href="#" class="footer-link">Login</a>
    </li>

    <li>
      <a href="#" class="footer-link">My account</a>
    </li>

    <li>
      <a href="#" class="footer-link">Terms & Conditions</a>
    </li>

    <li>
      <a href="#" class="footer-link">Promotional Offers</a>
    </li>

  </ul>

  <ul class="footer-list" id="customer-op">

    <li>
      <p class="footer-list-title">Customer Options</p>
    </li>

    <li>
      <a href="#" class="footer-link">Login</a>
    </li>

    <li>
      <a href="#" class="footer-link">My account</a>
    </li>

    <li>
      <a href="#" class="footer-link">Wish List</a>
    </li>

    <li>
      <a href="#" class="footer-link">Order tracking</a>
    </li>

    <li>
      <a href="#" class="footer-link">FAQ</a>
    </li>

    <li>
      <a href="#" class="footer-link">Contact us</a>
    </li>

  </ul>

</div>

</div>
</div>

<div class="footer-bottom">
<div class="container">

<p class="copyright">
  &copy; 2022 <a href="#">NCRealEstate</a>. All Rights Reserved <a href="mailto:contact@NCRealEstate.com" class="contact-link">(contact@NCRealEstate)</a>
</p>

</div>
</div>

</footer>


@endsection

@push('css')
<!-- Outsite CSS Files -->
<link rel="stylesheet" href="{{asset('css/bunchofthings/OutSideCssFiles/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bunchofthings/OutSideCssFiles/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bunchofthings/OutSideCssFiles/bootstrap-icons/bootstrap-icons.css')}}">
<link rel="stylesheet" href="{{asset('css/bunchofthings/OutSideCssFiles/swiper/swiper-bundle.min.css')}}">


<link rel="stylesheet" href="{{asset('css/Index.css')}}">

@endpush

@push('scripts')
<script src="{{ asset('js/Index.js') }}"></script>
@endpush
