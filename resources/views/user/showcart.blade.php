
<html lang="en">

<head>

  @include('user.css')

  <style>
    div.showcart{
      padding-top: 20px;
    }
    table{
      background-color: #390542; 
      color: white;
      text-align: center;
    }
    </style>

</head>

<body>
<!-- ======================================= 
   ============ Navbar =================== 
   =======================================  -->

   
  @include('user.navbar')

  @if(session()->has('message'))

<div class="alert alert-success">
    {{session()->get('message')}}
</div>

@endif

  <!-- Scrollup -->
  <button class="scrollup" id="goup">
    <i class="fa-solid fa-arrow-up scrollup"></i>
  </button>


    <!--content  -->
    <div class="showcart"  align="center">

        <table>
            <tr style="background-color: #18021C; ">
                <td style="padding:20px ; font-size: 20px;">Product Name</td>
                <td style="padding:10px ; font-size: 20px;">Quantity</td>
                <td style="padding:10px ; font-size: 20px;">Price</td>
                <td style="padding:10px ; font-size: 20px;">Action</td>
            </tr>
            <form action="{{url('order')}}" method="POST">
              @csrf
              @foreach($cart as $carts)
              <tr>
                  <td style="padding: 10px">
                    <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                    {{$carts->product_title}}
                </td>
                  <td style="padding: 10px">
                  <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                  {{$carts->quantity}}
                </td>
                  <td style="padding: 10px">
                  <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                  {{$carts->price}}
                </td>
                  <td style="padding: 20px">
                      <a class="btn btn-danger" href="{{url('delete', $carts->id)}}">Delete</a>
                  </td>
              </tr>
              @endforeach
          </table>
            <button  class="mt-3 btn bg-black text-white">Confirm Order</button>
          </form>
    </div>
    

  
  
  <!-- footer -->
  @include('user.footer')


 


  @include('user.script')


</body>

</html>
