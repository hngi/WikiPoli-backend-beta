<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    <div class="container">
        <a href="{{ url('/posts') }}" class="logo"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;"></a>
        <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul id="main-navbar" class="navbar-nav ml-auto"> 
                 @Auth
                  <li class="navbar-item mr-5">
                  
                    <a href="{{url('user_profile')}}" class="navbar-link" style="color: black;" id="logIn"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; border-radius:50%;">{{Auth::user()->full_name}}</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" id="btn" class="btn btn-sm btn-primary"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
               
                 @else
                <li class="navbar-item mr-5">
                    <a href="{{route('login')}}" class="navbar-link" style="color: black;" id="logIn">Log In</a>
                </li>
                <li class="navbar-item mr-5">
                    <a href="{{route('register')}}" class="btn navbar-link" id="signUp" style="background-color: #6d9bf1;">Sign Up</a>
                </li>
                 @endAuth
            </ul>
        </div>
    </div>
</nav> 
 
<!--h1 id="posts-intro">All Posts</h1-->
<div class="search">
@if (Route::has('login'))
    @auth
   <a href="{{url('create-post')}}"> <button  id="create-post">New Post</button></a>
    @endauth
    @endif
    <form action="{{url('search')}}" method="get">
        <input type="text" name="q" value=" " placeholder="Search Politician's name" class="justify-content-right">
        <input type="submit" name="Submit" value="Search">
    </form>
</div>
