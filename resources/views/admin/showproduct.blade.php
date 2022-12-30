
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        td{
            padding:20px;
        }
        table{
            margin-top: 10px;
            
        }
        .head{
            font-weight: bold;
            font-size: 20px;
            background-color: #02001A;
        }
        .content{
            background-color: black;
            text-align: center;
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper mt-3">
            <div class="container" align="center">

            <h1>Show Products</h1>
            
            <!-- will be displayed when data added successfuly -->
            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}
            </div>

            @endif
                <table>
                    <tr class="head">
                        <td>Title</td>
                        <td>Description</td>
                        <td>Quntity</td>
                        <td>Price</td>
                        <td>Image</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                    @foreach($data as $product)
                    <tr class="content ">
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}$</td>
                        <td>
                            <img height="100px" width="100px" src="/productimage/{{$product->image}}">
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Update</a>
                        </td>
                        <td>
                            <!-- when click on the delete button it will get the id of that row then go to deleteproduct function -->
                            <a class="btn btn-danger" href="{{url('deleteproduct', $product->id)}}">Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      @include('admin.script')
  </body>
</html>

