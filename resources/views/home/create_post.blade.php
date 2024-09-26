<!DOCTYPE html>
<html lang="en">
   <head>
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
            display: inline-block;
            width: 100px;
            font-size: 18px;
        }

        .field_deg{
            padding: 10px;
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
         <h3 class="title_deg">Add Post</h3> 
        <form action="{{ url('user_post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label for="">Title:</label>
                <input type="text" name="title" placeholder="enter post title">
            </div>
            <br>
            <div class="field_deg">
                <label for="">Description:</label> <br>
                <textarea name="description" id="" cols="30" rows="10"> enter post description</textarea>
            </div>

            <div>
                <label for="">Add image</label>
                <input type="file" name="image">
            </div>
            <br>
            <divclass="field_deg">
                <input class="btn btn-primary" type="submit" value="Add Post">
            </div>
        </form>
         </div>
     </div>
     
      <!-- footer section start -->
      @include('home.footer')
      
   </body>
</html>