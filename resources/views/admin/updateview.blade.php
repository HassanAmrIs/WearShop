
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style>
        .title{
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        div input{
            color: gray;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
     <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <!-- title -->
            <h1 class="title">Add Product</h1>


            <!-- will be displayed when data added successfuly -->
            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}
            </div>

            @endif
            <form action="{{ url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Product title -->
                <div style="padding: 15px;">
                    <label>Product title</label>
                    <input type="text" name="title" value="{{$data->title}}" required="">
                </div>
                <!--  Price -->
                <div style="padding: 15px;">
                    <label>Price</label>
                    <input type="number" name="price"value="{{$data->price}}" required="">
                </div>
                <!-- Description -->
                <div style="padding: 15px;">
                    <label>Description</label>
                    <input type="text" name="des" value="{{$data->description}}" required="">
                </div>
                <!-- Quantity -->
                <div style="padding: 15px;">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="{{$data->quantity}}" required="">
                </div>

                <div style="padding: 15px;">
                    <label>Old Image</label>
                    <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
                </div>
                <!-- file -->
                <div style="padding: 15px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit" >
                </div>
            </form>
            

        </div>
    </div>
        
      @include('admin.script')
  </body>
</html>

