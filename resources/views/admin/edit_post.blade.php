<!DOCTYPE html>
<html>
  <head> 
    {{-- bring on the css files from the public folder --}}
    <base href="/public">
   @include('admin.css')

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
  
          <h2 class="post_title">Edit Post</h2>
       
          <form action="{{ url('update_post', $post->id) }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Post Title</label>
              <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="enter post title">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ $post->description }}</textarea>
            </div>
  
            <div>
                <label for="">Old image</label>
                <img height= "100px" width= "150px" src="/postimage/{{ $post->image }}" alt="">
            </div>
            
              <label>Update old Image</label>
              <input type="file" name="image">
            
  
            <div class="div_center">
                     
              <input type="submit" class="btn btn-primary" value="Update">
          </div>
  
      </div>
      </form>
  </div>


     </div>
     

      
       @include('admin.footer')
       
  </body>
</html>