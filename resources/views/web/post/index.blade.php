@section('title')
<title>WikiPoli | Posts</title>
@endsection
@extends('layouts.postList')
@section('content')
   
<div class="container main">
    
		<div class="row">
			{{-- Function to shorten the texts --}}
			<?php
				function textShorten($text, $limit = 400){
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
                 @forelse($posts as $post)
			<div class="col-sm col-md-5" id="post-1">
                            
				<div class="post">

						<h4>{{ $post->title }}</h4>
						<p>
							{!! textShorten($post->body) !!}
						</p>

						<a href="/posts/{{ $post->id }}/{{ rewriteText($post->title) }}" class="btn btn-info">Read More</a>

					<div class="icon mt-4">
						<!--<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>-->
						<!-- twitter -->
						<a href="http://www.twitter.com/intent/tweet?url={{ URL::current() }}&text={{ rewriteText($post->title) }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
						<!-- facebook -->
						<a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
						@if (Auth::check())
							<a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
						@endif
					</div>
					
				</div>	
        
			</div>
		
         
	               @empty
     
     There are no post yet...
	 @endforelse
		</div>
		{{$posts->links()}} 
	</div>
@endsection