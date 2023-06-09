@extends('master')
@section('content')
    

   <div class="custom-product">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($products as $item)
        <div class="carousel-item {{$item['id']==1? 'active':''}}" data-bs-interval="10000">
     <a href="detail/{{$item['id']}}">
         <img src="{{$item['gallery']}}" class="slider-img">
       <div class="carousel-caption d-none d-md-block">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
     </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trending-item">
          <a class="link" href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="bc">
            <h6>{{$item['name']}}</h6>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
   </div> 


@endsection