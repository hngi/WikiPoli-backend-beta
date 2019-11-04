@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.postList')
@section('content')
<div class="clearfix"></div>
<br/>
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
<div class="profile-tabs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profiles</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Posts</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="profiles">
                            <div class="container">
                                <div class="row">
                                    @forelse($results as $result)
                                    <div class="col-md-4">
                                        <div class="item">
                                            <img src="{{asset($result->file)}}" width="100" height="100">
                                            <p class="name">{{$result->first_name }} {{$result->last_name }}</p>
                                        </div>
                                    </div>
                                    @empty
                                    No Politician Found
                                    @endforelse

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="tab-pane fade show " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container main">
                            <div class="row">
                                @foreach($results as $result)
                                @foreach($result->politicianpost as $read)
                                @foreach($read->post as $p)

                                <div class="col-sm col-md-5" id="post-1">
                                    <div class="post">
                                        <h4>{{$p->title}}</h4>
                                        <p>
                                      {!! textShorten($p->body) !!}
                                        </p>
                                        	<a href="/posts/{{ $p->id }}/{{ rewriteText($p->title) }}" class="btn btn-info">Read More</a>
                                    </div>
                                </div>

                                @endforeach
                                @endforeach
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection