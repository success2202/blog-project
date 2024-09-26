<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
       @include('home.header')
    
    </div>
    
    <div style="text-align: center; margin: auto;" class="col-md-7">
        <div><img style="padding: 20px;" src="/postimage/{{ $post->image }}" class="services_img"></div>
        <h3> <b> {{$post->title}} </b> </h3>
        <h4>  {{$post->description}}  </h4>
        <p>Post by <b>{{ $post->name }}</b></p>
        <div class="btn_main"><a href="{{ url('/') }}">Back</a></div>
     </div>
    
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>