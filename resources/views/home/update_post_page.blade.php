<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')

      <style class="text/css">
        .div_deg{
            text-align: center;
        }

        .title_deg{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        label{
            
            width: 200px;
            font-size: 18px;
            
        }

        .field_deg{
            padding: 10px;
            text-align: left;
        }

        .field_button{
            padding: 10px;
            text-align: center;
        }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
       @include('home.header')
    </div>

    <div class="div_deg mb-3">

       <div class="p-4 mx-auto shadow rounded" style="margin-top: 30px; width: 100%; max-width: 500px;">
        
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>
        @endif
        
        
        <h3 class="title_deg">Update Post</h3> 
        <form action=" {{ url('update_post_data', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label for="">Title:</label> <br>
                <input type="text" name="title" value="{{ $data->title }}" placeholder="enter post title">
            </div>
            <br>
            <div class="field_deg">
                <label for="">Description:</label> <br>
                <textarea name="description" id="" cols="30" rows="10"> {{ $data->description }}</textarea>
            </div>

            <div class="field_deg">
                <label for="">Current Image:</label> <br>
                <img height="200" width="250" src="/postimage/{{ $data->image }}" alt="">
            </div>

            <div class="field_deg">
                <label for="">Upload New Image:</label> <br>
                <input type="file" name="image">
            </div>
           
            <div class="field_button">
                <input class="btn btn-primary" type="submit" value="Update Post">
            </div>
        </form>
         </div>
     </div>
     
     
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>