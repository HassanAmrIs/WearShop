
<html lang="en">

<head>

  @include('user.css')

</head>

<body>
<!-- ======================================= 
   ============ Navbar =================== 
   =======================================  -->
  @include('user.navbar')




  <!-- footwear -->
  

<div class="latest-products" id="product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div align="center">
              <h2>Footwear Products</h2>
              <form class="container search mt-3 mb-3" action="{{url('search')}}" method="get"  role="search">
                 @csrf
                <div class="d-flex">
            <input class="form-control me-2" name="search" type="search" placeholder="Search Here What You Need...." aria-label="Search">
            <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>
            </div>
          </div>
          
         @foreach($data as $product)
         <div class="col-md-3">
            <div class="product-item">
              <img src="/productimage/{{$product->image}}" alt="">
              <div class="down-content">
                <h4>{{$product->title}}</h4>
                <h6>{{$product->price}}$</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart', $product->id)}}" method="POST">
                 @csrf
                 <div class="row">
                    <div class="col-8">
                      <input type="number" value="1" min="1"  class="form-control" style="width: 60px;" name="quantity">
                    </div>
                    <div class="col-4">
                      <button style="background-color: rgb(155, 1, 155); padding: 12px; border-radius:50%;" class=" text-white" type="submit" ><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                 </div>
                </form>
        
              </div>
            </div>
          </div>
          @endforeach
          
          @if(method_exists($data, 'links'))
            <div class="d-flex justify-content-center">
              {!! $data->links() !!}
            </div>
          @endif
        </div>
      </div>
    </div>
 </div>




    

  <!-- footer -->
  @include('user.footer')


 


  @include('user.script')


</body>

</html>
