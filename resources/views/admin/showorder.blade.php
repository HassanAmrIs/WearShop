
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
    div.showcart{
      padding-top: 20px;
    }
    table{
      background-color: #4C5958; 
      color: white;
      text-align: center;
      margin: 40px 0px;
    }
    td{
      padding: 12px;
    }
    div h1{
            font-size: 40px;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper mt-2">
        <div class="container" align="center">
        @if(session()->has('message'))

      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>

          {{session()->get('message')}}
      </div>

@endif

        <h1>Orders</h1>

        <table>
            <tr style="background-color: #020026; ">
                <td style="padding:20px ; font-size: 20px;">Customer name</td>
                <td style="padding:10px ; font-size: 20px;">Phone</td>
                <td style="padding:10px ; font-size: 20px;">Address</td>
                <td style="padding:10px ; font-size: 20px;">Product</td>
                <td style="padding:10px ; font-size: 20px;">Price</td>
                <td style="padding:10px ; font-size: 20px;">Quantity</td>
                <td style="padding:10px ; font-size: 20px;">Status</td>
                <td style="padding:10px ; font-size: 20px;">Action</td>
            </tr>

            @foreach($order as $orders)
            <tr>
                <td>{{$orders->name}}</td>
                <td>{{$orders->phone}}</td>
                <td>{{$orders->address}}</td>
                <td>{{$orders->product_name}}</td>
                <td>{{$orders->price}}</td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->status}}</td>
                <td><a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">
                     Delivered
                </a>
                <a class="btn btn-danger" href="{{url('deleteorder', $orders->id)}}">
                     Deleted
                </a>
              </td>
                
            </tr>
            @endforeach

        </table>
         </div>
    </div>
        
      @include('admin.script')
  </body>
</html>

