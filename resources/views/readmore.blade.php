<?php
  function textShorten($text, $limit = 150){
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text."...";
    return $text;
  }
  // function to rewrite the title for valid SEO
  function rewriteText($string) {
    $text = preg_replace('/[^-a-z0-9-]+/', '-', strtolower($string));
    return $text;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WIKIPOLI - {{ rewriteText($post->title) }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/styles/readmore.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ URL::current() }}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="{{ rewriteText($post->title) }}">
    <meta name="twitter:description" content="{{ textShorten($post->body) }}">
    <meta name="twitter:image" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">

    <!-- Facebook & Whatsapp -->
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:description" content="{{ textShorten($post->body) }}">
    <meta property="og:image" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">
    <meta property="og:image:secure_url" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:image:alt" content="site-logo">
    <meta property="og:type" content="website">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <span id="logo">
          <a href="/posts"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="wikipoli-site-logo" width="100"/></a>
        </span>
      </div>
      {{-- Check if user is logged in --}}
      @if(!Auth::guest())

      <div class="col-md-6">
        <ul class="firstnav">
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
          <li>
            <a href="{{url('home')}}"><i class="fa fa-user"></i>&nbsp;{{ Auth::user()->full_name }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
      </div>
      <div class="col-md-5">
           <form action="{{url('search')}}" method="get">
        <div class="input-group mb-3" style="text-align-last: inherit;">
          <input type="text" name="q" class="form-control" id="input" placeholder="Enter Politicial Name"/>
          <div class="input-group-append">
            <button type="submit"class="input-group-text">Search</button>
          </div>
        </div>
           </form>
      </div>
    </div>
    @else 
    <div class="col-md-7">
    </div>
    <div class="col-md-5">
         <form action="{{url('search')}}" method="get">
      <div class="input-group mb-3" style="text-align-last: inherit;">
        <input type="text" name="q" class="form-control" id="input" placeholder="Enter Politicial Name"/>
        <div class="input-group-append">
          <button type="submit" class="input-group-text">Search</button>
        </div>
      </div>
         </form>
    </div>
    @endif    
      <br />
      <br />
    <div class="row">
      <div class="col-md-12" id="content">
        <!-- post content here -->
        <div class="post">
          <div class="col-md-12">
            <h1>{{ $post->title }}</h1>
            <p style="text-align: justify; display: block;">
              {!! $post->body !!}
              <div class="icon mt-4">
                  <form id="like" method="POST">
                      <input type="hidden" name="actions"  value="like">
                      <input type='hidden' name='slug' value="{{$post->slug}}" />
                      <input type='hidden' name='post_id' value="{{$post->id}}" />
                   </form>
                   <form id="unlike" method="POST">
                      <input type="hidden" name="actions"  value="unlike">
                      <input type='hidden' name='slug' value="{{$post->slug}}" />
                      <input type='hidden' name='post_id' value="{{$post->id}}" />
                   </form>
                  <span class="item-style"><i class=" fa  fa-thumbs-o-up fa-2 like p-like"></i> | <i class=" fa  fa-thumbs-o-down fa-2 unlike p-unlike"></i></span> |
              <!--<a href="#" class="like"> /*Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like' */}}</a> | 
                <a href="#" class="like">{/*Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike' */}}</a> |--> 
                <!-- twitter -->
                <a href="http://www.twitter.com/intent/tweet?url={{ URL::current() }}&text={{ rewriteText($post->title) }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
                <!-- facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>

    {{-- display comments here --}}
    <div class="row">
      <div class="col-md-12">
        <h3><span class="glyphicons glyphicons-comment"></span>{{ count($post->comments) }} Comment(s)</h3>
        {{-- loop --}}
          <div class="comment">
            <div class="row">
              <div class="col-md-8">
                <!-- Post Comments here -->
                @foreach ($post->comments as $comment)
                <div class="card mt-4">

                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-2">
                          <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                          <p class="text-secondary text-center">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="col-md-10">
                          <p>
                            <a href="#"><strong>{{ $comment->user }}</strong></a>
                          </p>
                          <p>
                              {{ $comment->comment }}
                          </p>
                          <p>
                            <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
      </div>
    </div>  
    <!--Authenticate user-->
      @if(!Auth::guest())    

    <div class="row">
          <!-- Comment Form -->
          <div class="col-md-9 mt-5">
            {{-- check if user is logged in --}}

                {{-- Form --}}
                <form method="POST" action="{{ url('/comments/'.$post->id) }}">
                  @csrf

                  <div class="form-group row">

                    <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Type Your Comment Here" value="{{ old('comment') }}" required autocomplete="comment"></textarea>

                    @error('comment')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <input type="hidden" name="user" value="{{ Auth::user()->full_name }}">
                  <input type="hidden" name="post_id" value="{{ $post->id }}">

                  <div class="form-group row mb-0">
                    <div class="">
                      <button type="submit" class="btn btn-info">
                        {{ __('Add Comment') }}
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            @else
              
          </div>
          <div class="alert alert-danger"><h4>Comments disabled! You must signin before you can comment, click the button below to login<br><br> <a href="/login" class="btn btn-primary">Login</a></h4></div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div id="footer">
    <div class="container" >
      <div class="row links">
        <div class="col-md-4 col-sm-12  text-center">
          <ul class="quick-links">
            <li>Legal</li>
            <li><a href="Terms-of-use.html">Terms of Use</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12  text-center">
          <ul class="quick-links">
            <li>Company</li>
            <li><a href="">About</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">FAQs</a></li>
            <li><a href="">Donations</a></li>
          </ul>
        </div>

        <div class="col-md-4 col-sm-12 text-center">
          <h3 style="font-size:17px; padding-top: 14px;">Connect With Us</h3>
          <div class="social-link">
            <ul>
              <li><a href="facebook.com"><span class="fa fa-facebook"></span></a> </li>
              <li><a href="twitter.com"><span class="fa fa-twitter"></span></a></li>
              <li><a href="instagram.com"><span class="fa fa-instagram"></span></a> </li>
            </ul>                                   
            <p>contact@wikipoli.gq</p>
          </div> 
        </div>
        <div class="col-lg-12 copyright text-center">
          <p>&copy; 2019 Wikipoli - All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>  
  <script>
    var token = '{{ Session::token() }}';
    var urlLike = '{{ route('like') }};
  </script>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <script src="{{ asset('/assets/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/comment.js') }}"></script>
  <script>
      jQuery(document).on('click', '.p-like', function(event){
      var formData = jQuery("#like").serialize();
      event.preventDefault();
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      });
      jQuery.ajax({
      url: "{{url('/like')}}",
              type: 'POST',
              data:  formData,
              success: function (data) {
              if (data.status == 200) {
              $(".u-update").load(" .u-update");
              return false;
              }
              }
      });
      });
          </script>
 <script>
      jQuery(document).on('click', '.p-unlike', function(event){
      var formData = jQuery("#unlike").serialize();
      event.preventDefault();
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      });
      jQuery.ajax({
      url: "{{url('/like')}}",
              type: 'POST',
              data:  formData,
              success: function (data) {
              if (data.status == 200) {
              $(".u-update").load(" .u-update");
              return false;
              }
              }
      });
      });
          </script>
  <script type="text/javascript">
  /*$(document).ready(function() {
    $("a.like").on('click', function(event) {
      event.preventDefault();
      postId = event.target.parentNode.parentNode.dataset['postid'];
      var isLike = event.target.previousElementSibling == null;
      $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, postId: postId, _token: token},
      })

      .done(function() {
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post : 'Dislike';
        if(isLike) {
          event.target.nextElementSibling.innerText = 'Dislike';
        } else {
          event.target.previousElementSibling.innerText = 'Like';
        }
      });
    });
  });*/
  </script>
</body>
</html>
