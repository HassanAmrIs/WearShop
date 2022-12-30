
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <section style="margin: 200px;" align="center">
        <div >
          <h1 style="font-size:60px; font-weight:bold;">Welcome to Dashboard</h1>
        </div>
        <br>
        <div style="margin: 60px;" >
          <a class="btn btn-success p-2 ms-5" style="font-size: 20px;" href="{{url('viewuser')}}">View users</a>
          <a class="btn btn-secondary p-2 ms-5" style="font-size: 20px;" href="{{url('product')}}">Upload Product</a>
          <a  class="btn btn-primary p-2 mss-5" style="font-size: 20px;" href="{{url('showproduct')}}">Show Product</a>
          <a class="btn btn-info p-2 ms-5" style="font-size: 20px;" href="{{url('showorder')}}">Show Orders</a>
          
        </div>
      </section>
        
      @include('admin.script')
  </body>
</html>

