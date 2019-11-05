@section('title')
<title>WikiPoli | My Profile</title>
@endsection
@extends('layouts.user_profile')
@section('content')
   
<div class="container">
<?php
	function textShorten($text, $limit = 400){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
		$text = $text."...";
		return $text;
	}
?>

 <main class="main-section container ">
  <section class="intro-section ">
      
  
   <div class="intro-section__name float-left mt-5 pt-2">
     <p class="john-doe"></p>
   </div>
          <!-- <div class="container" style="margin-bottom: 5%; margin-top: 10%;">
           <img class="img-fluid"  src="https://res.cloudinary.com/nkechi-christabel/image/upload/ar_16:9,c_fill,e_sharpen,g_auto,h_700,w_1900/v1571932477/iq3kkzskgnpkpdafppi7.jpg" alt="Fela Durotoye" style="width: 100%; height: 100% !important;">
          </div>           -->
        </section>
        </main>
        <!--Nkechi's work ends here-->

        <main class="container" style="padding-left: 5.4%;">
            <div class="row">
                <div class=" aside col-12 col-sm-4 col-md-4 col-lg-4 py-15">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; display:block; margin-left:auto; margin-right:auto;"><br>
                <form enctype="multipart/form-data" action="/user_profile" method="POST">
                  <input type="file" name="avatar" style="display:block; margin-left:auto; margin-right:auto;">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" value="Update Avatar" class="btn btn-primary btn-blue mt-3" style="display:block; margin-left:auto; margin-right:auto;">
                </form>
                    <h2>{{$user->full_name}}</h2>
                    <p>{{$user->description}} <br> <b><i class="fas fa-map-marker-alt"></i> {{$user->location}}</b> </p>
    
                    <p><i class="far fa-calendar-alt"></i> Joined {{date('F d, Y', strtotime($user->created_at))}}</p>
                    <p class="contrib"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{count($posts)}} Posts &nbsp; </b></p>
                    <a href="{{ url('/edit/profile') }}" class="btn btn-lg btn-primary btn-blue btn-block mt-3">Edit Profile</a>

                    <!-- FOR THE FOLLOW AND UNFOLLOW FEATURES -->
                    <div></div>
                    <!-- <div class="followDiv">

                      <span 
                        onclick="showFollowers()"
                        id="followers" 
                        class="badge badge-primary float-left" 
                        data-toggle="modal" 
                        data-target="#myModal"
                        >
                      </span>

                      <span 
                        onclick="showFollowing()"
                        id="following" 
                        class="badge badge-primary float-right" 
                        data-toggle="modal" 
                        data-target="#myModal"
                      >
                      </span>
                    </div> -->
                    <div></div>
                    <!-- <div class="images">
                        
                          <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                          <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                          <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                    </div>
                    <div class="images marg">
                        
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                    </div>
                    <div class="images marg">
                        
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                    </div> -->
                
                </div>
                <!-- TechieNg Work continues on footer -->
    
                <!-- Theresande's work starts -->
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 py-5">
                  <div class="row" style="padding-left: 20%;">
                    <div class="col-4"><a href="">Contributions</a></div>
                    <div class="col-4"><a href="" style="color: black; padding-left: 20%;">Posts</a></div>
                    <div class="col-4"><a href="">Favorites</a></div>
                  </div>
                  <hr>
                  @foreach($posts as $post)
                  <div class="col-3 col-sm-2 col-md-2 col-lg-2 mt-3">
                    <!-- <img class="image" src="https://res.cloudinary.com/lissacinta/image/upload/v1571955638/image2_gvpo75.png" alt=""> -->
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; border-radius:50%;">
                    
                  </div>
                  <div class="aside_content col-9 col-sm-10 col-md-10 col-lg-10 ml-auto">    
                    
                    
                    <div style="margin-bottom: 5%;">
                      <span style="text-align: left;"><b>{{$user->full_name}}</b></span>
                  <span style="float: right ;" ><b>{{date('F d, Y', strtotime($post->created_at))}}</b></span>
                    </div>
                    
                    <div class="img-container  mb-5">
              
                          
                        <!-- <img class="image"  src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="Fela Durotoye"> -->
                        <div class="img__text pl-5 pt-4"><h2>{{$post->title}}</h2></div>                          
                            
                    </div>
                      <div class="Fela-posts">
                        
                        <p>{!! textShorten($post->body) !!} <br><a href="/post/{{ $post->id }}">Read More</a></p>
                      </div>
                     
                        <section class="">        
                                   <div class="row">

                                   
                              <div class="col" style="float: left !important;">                
                              <span class="interactives">                      
                              <i class="far fa-heart mr-auto"></i> <b>2.1K</b></span>
                               </div>            
                          <div class="col social-media" style="float: right;">                
                                                
                                  <div class="row">                                     
                                      <div class="ml-auto"> 
                                        <!-- <span class="interactives ml-auto" ><b> See comments (50+)</b></span>     -->
                                        <p style="text-align: right;">                    
                                          <!-- <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fas fa-share-alt fa-stack-1x" style="color: #fff;"></i>
                                          </span> -->
                                            <!-- <a href="http://www.twitter.com/intent/tweet?url={{ URL::current() }}&text={{ $post->title }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a> -->
						
                                        </p>                        
                                      </div>                    
                                  </div>               
                              </div>                   
                                   </div>
                          </section>
                      
                      </div>
                      <hr>
  ​               @endforeach 
                      
  
        </main>
    <!-- TechieNg's starts -->
    

    </div>
     
@endsection