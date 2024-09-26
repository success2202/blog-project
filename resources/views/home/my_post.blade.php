<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')

      <style type="text/css">
        .post_deg{
            padding: 30px;
            text-align: center;
            background-color: #0f0e0e;
        }

        .title_deg{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }

        .des_deg{
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
        }

        .img_deg{
            height: 400px;
            width: 600px;
            padding: 15px;
            margin: auto;
           
        }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
       @include('home.header')
       
       @foreach ($data as $data)
      
       @if(session()->has('message'))
       <div class="alert alert-success">
        {{-- {{ 'messaage' }} --}}
        <button>X</button>

       </div>

       @endif
         <div class="post_deg">
           <img src="/postimage/{{ $data->image }}" class="img_deg">
            <h4 class="title_deg"> {{ $data->title }}  </h4>
            <p class="des_deg">{{ $data->description }}</p>
             <a onclick="return confirm('are you sure you want to delete this post')" class="btn btn-danger" href="{{ url('my_post_del', $data->id) }}">Delete</a> &nbsp;
            <a class="btn btn-primary" href="{{ url('update_post_page',$data->id) }}">Edit</a>
         </div>
         @endforeach
        
         
      </div> 

      </div>
      
     
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>