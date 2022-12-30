
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

      <div class="container-fluid page-body-wrapper mt-5">
            <div class="container" align="center">

      <h1>Viwe Users</h1>

        <div style="margin: 60px;" >

        @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}
            </div>

        @endif
        <table>
                    <tr class="head">
                        <td>Name</td>
                        <td>E-mail</td>
                        <td>UserType</td>
                        <td>Phone</td>
                        <td>Address</td>
                        <td>Action</td>
                    </tr>
                    @foreach($data as $user)
                    <tr class="content">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->usertype}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>

                        <td>
                            <!-- when click on the delete button it will delete user  -->
                            <a class="btn btn-danger" href="{{url('deleteuserview', $user->id)}}">Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                </table>

        </div>
    </div>
    </div>
        
      @include('admin.script')
  </body>
</html>

