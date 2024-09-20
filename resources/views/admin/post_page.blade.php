<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <style type="text/css">

    .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
        
    }

    .div_center{

        text-align: center;
        padding: 10px;
    }
    label{
        display: inline-block;
        font-size: 30px;
        font-weight: 400;
        color: white;
    }
    .hv{
      box-shadow: 5px 5px 5px 8px rgb(46, 46, 85) !important;
    }
   </style>

  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      
      
      <div class="page-content">

        <div class="p-4 mx-auto shadow rounded hv" style="margin-top: 50px; width: 100%; max-width: 400px;">

          <div  class="container-fluid">
            @if (session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: red">X</button>
                 <p style="text-align: center; font-weight:300; font-size: 15px;"> {{ session()->get('message') }} </p>
              </div>
            @endif

        <h2 class="post_title">Add Post</h2>
     
        <form action="{{ url('add_post') }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Title</label>
            <input type="text" name="title" class="form-control" placeholder="enter post title">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          
            <label>Image</label>
            <input type="file" name="image">
          

          <div class="div_center">
                   
            <input type="submit" class="btn btn-primary">
        </div>

    </div>
    </form>
</div>

 </div>
       @include('admin.footer')
       
  </body>
</html>