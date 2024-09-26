<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
    .title_deg{
        font-size: 30px;
        text-align: center;
        color: white;
        padding: 20px;
    }

    .img_deg{
        height: 100px;
        width:  150px;
        padding: 10px;
    }

    .table_deg{
        border: 1px solid white;
        width: 80%;
        text-align: center;
        margin-left: 70px;
    }

    .th_des{
        background-color: hsl(120, 29%, 55%) !important;
        color: rgb(155, 144, 144) !important;
        font-size: 20px !important;
        font-weight: 400 !important;
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
       
        @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
           <p style="text-align: center; font-size: 15px;"> {{ session()->get('message') }} </p> 
        </div>
            
        @endif

        <h1 class="title_deg">All Post</h1>
            <table class="table_deg table table-dark table-striped">
                <tr class="th_des">
                    <th> Post Title </th> <th> Description </th> <th> Post By</th> <th> Post Status</th> 
                    <th> User Type </th> <th>imeage</th> <th>Actions</th> <th>Update</th> <th>Status Accept</th> <th>Status Reject</th>
                </tr>
                @foreach ($post as $post )
                    
               
                <tr>
                    <td>{{ $post->title }}</td> 
                    <td>{{ $post->description }}</td> 
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->post_status }}</td> 
                    <td>{{ $post->user_type }}</td> 
                    <td><img class="img_deg" src="postimage/{{ $post->image }}"></td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_post', $post->id) }}" onclick="return confirm('Are you sure you want to delete this post ?')">Delete</a>
                    </td>

                    <td>
                        <a class="btn btn-info" href="{{ url('edit_post', $post->id) }}">Edit</a>
                    </td>

                    <td>
                        <a onclick="return confirm('are you sure you want to reject the post?')" class="btn btn-primary" href="{{ url('accept_post', $post->id) }}">Accept</a>
                    </td>

                    <td>
                        <a onclick="return confirm('are you sure you want to reject the post?')" class="btn btn-danger" href="{{ url('reject_post', $post->id) }}">Reject</a>
                    </td>
                </tr>
                @endforeach
            </table>


      </div>
   
      
       @include('admin.footer')
       
  </body>
</html>