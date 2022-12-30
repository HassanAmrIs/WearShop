<!-- ======================================= 
     ============ Navbar =================== 
     =======================================  -->
<section class="begining">
        <div class="container d-flex pt-4 ">
            <div>
                <p>Free Shipping on All orders Over 75$!</p>
            </div>
            <div class="ms-auto d-flex">
               
                
                  @if (Route::has('login'))
                          
                          @auth
                              
                              <a href="{{url('profile')}}">Profile <i class="fa-solid fa-gear ps-1 pe-2"></i></a>
                              <p class="me-2" id="cart"><a href="{{url('showcart')}}">My Carft</a><i class="fa-solid fa-cart-shopping pe-2 ps-1"></i></p>                   
                  @else
                          <div class="d-flex">
                          <a href="{{ route('login') }}" class="nav-link pe-3" >Log in</a>

                              @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="nav-link pe-3">Register</a> 
                              @endif
                              </div>
                          @endauth
                      
                  @endif
                
          </div>
              
                <p class="pe-2"><a href="#">Whislist</a></p>
                <p class="pe-2">
                  <div class="dropdown"> Currency
                    <button class="btn pe-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <i class="fa-solid fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><button class="dropdown-item" type="button">Usd</button></li>
                      <li><button class="dropdown-item" type="button">Euro</button></li>
                      <li><button class="dropdown-item" type="button">GBP</button></li>
                    </ul>
                  </div>
                </p>
                
            </div>
      </div>
</section>
<!-- ======================================= 
     ============ Search =================== 
     =======================================  -->
    <section>
      <form class="container search mt-3 mb-3" action="{{url('search')}}" method="get"  role="search">
        @csrf
          <div class="d-flex">
              <input class="form-control me-2" name="search" type="search" placeholder="Search Here What You Need...." aria-label="Search">
              <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
      </form>
</section>
 <!-- ======================================= 
     ============ Navbar =================== 
     =======================================  -->

    <nav class="navbar navbar-expand-lg bg-black sticky-top">
      <div class="container">
        <button class="navbar-toggler" style="background: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fs-3" href="#">Fashion</a>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('women')}}">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('men')}}">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('footwear')}}">Footwear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('accessories')}}">Accessories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
