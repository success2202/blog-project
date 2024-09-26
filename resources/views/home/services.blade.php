<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog Posts </h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">

          <div class="row">

            @foreach ($post as $post )
               
             <div class="col-md-4" style="padding: 10px;">
                <div><img src="/postimage/{{ $post->image }}" class="services_img"></div>
                <div style="text-align: center; font-size: 15px;"> {{$post->title}} </div>
                <div>Post by <b>{{ $post->name }}</b> </div>
                <span class="btn btn-primary"> <a href="{{ url('post_details', $post->id) }}">READ MORE</a> </span>
                <br> <br>
             </div>

             @endforeach
             
          </div> 
       </div>
    </div>
 </div>=