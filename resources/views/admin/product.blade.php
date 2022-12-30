
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        div input{
            color: gray;
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
    <div class="container-fluid page-body-wrapper mt-5">
        <div class="container" align="center">
            <!-- title -->
            <h1>Add Product</h1>


            <!-- will be displayed when data added successfuly -->
            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}
            </div>

            @endif
            <form action="{{ url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Product category -->
                <div style="padding: 15px;">
                    <label>Product category</label>
                    <select style="color:gray;" id="category" name="category" required="">
                        <option value="women">women</option>
                        <option value="men">men</option>
                        <option value="footwear">footwear</option>
                        <option value="accessories">accessories</option>
                    </select>
                </div>
                <!-- Product title -->
                <div style="padding: 15px;">
                    <label>Product title</label>
                    <input type="text" name="title" placeholder="Give a product title" required="">
                </div>
                <!--  Price -->
                <div style="padding: 15px;">
                    <label>Price</label>
                    <input type="number" name="price" placeholder="Give a price" required="">
                </div>
                <!-- Description -->
                <div style="padding: 15px;">
                    <label>Description</label>
                    <input type="text" name="des" placeholder="Give a description" required="">
                </div>
                <!-- Quantity -->
                <div style="padding: 15px;">
                    <label>Quantity</label>
                    <input type="text" name="quantity" placeholder="Product Quantity" required="">
                </div>
                <!-- file -->
                <div style="padding: 15px;">
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

