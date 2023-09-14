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
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Category Name"> 
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </form>
                </div>
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