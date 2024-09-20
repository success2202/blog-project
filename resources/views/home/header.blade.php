<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="contact.html">Contact</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
       <div class="menu_main">
          <ul>
             <li class="active"><a href="{{ route('home') }}">Home</a></li>
             <li><a href="about.html">About</a></li>
             <li><a href="services.html">Services</a></li>
             <li><a href="blog.html">Blog</a></li>
             <li><a href="contact.html">Contact us</a></li>

             @if (Route::has('login'))
             @auth
             
            <li> 
                <x-app-layout>
                </x-app-layout>
            </li>
            

             {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
             @else
             <li><a href="{{ route('login') }}">Login</a></li>
             <li><a href="{{ route('register') }}">Register</a></li>
             @endauth
            @endif
          </ul>
       </div>
    </div>
 </div>