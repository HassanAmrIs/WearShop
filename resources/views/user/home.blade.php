
<html lang="en">

  <head>

    @include('user.css')

  </head>

  <body>
<!-- ======================================= 
     ============ Navbar =================== 
     =======================================  -->

     
    @include('user.navbar')

    <!-- Scrollup -->
    <button class="scrollup" id="goup">
      <i class="fa-solid fa-arrow-up scrollup"></i>
    </button>
    @if(session()->has('message'))

<div class="alert alert-success">
  {{session()->get('message')}}
  
</div>

@endif
<!-- ======================================= 
     ============ header =================== 
     =======================================  -->
    @include('user.header')


    <!-- Page Content -->
<!-- ======================================= 
     ============ header2 =================== 
     =======================================  --> 
     <main class="container mt-5 mb-5">
        <div class="row">
          <div class="col-6">
            <div class="me-1 mb-3">
              <img src="assets/img/model1.jpg">
            </div>
            <div>
              <h6>Hot Collection</h6>
              <h1>New Trend For Women</h1>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore praesentium explicabo qui aliquid, eius impedit magnam.</p>
              <button><a style="text-decoration:none; color:black;" href="{{url('wommen')}}">Shop Now</a></button>
            </div>
          </div>
          <div class="col-6">
              <div class="mb-3 main">
                <img src="assets/img/model2.jpg" alt="">
                <div class="sp_b">
                  <button><a style="text-decoration:none; color:white;" href="{{url('men')}}">VIEW COLLECTION</a></button>
                </div>
              </div>
              <div>
                <img src="assets/img/model3.jpg">
              </div>
          </div>
        </div>
     </main>

    <!-- products -->
    @include('user.product')
   
    <!-- content -->
    @include('user.content')
    
    <!-- footer -->
    @include('user.footer')


   


    @include('user.script')


  </body>

</html>
