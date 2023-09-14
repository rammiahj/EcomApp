<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 20px ;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
        .tab1{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid purple;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if(session()->has('message'))
              <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}
              </div>
            @endif
            <!-- add category form -->
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Category Name"> 
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </form>
                </div>
            <!-- add category form ends -->
            <!-- view category table begins -->
            <div class="table-responsive">
                <table class="tab1">
                    <tr>
                      <td>Category</td>
                      <td>Action</td>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$category->Category_name}}</td>
                      <td><a class="btn btn-primary" href="">Update</a> &nbsp; <a class="btn btn-danger" href="">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- view category table ends -->
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>