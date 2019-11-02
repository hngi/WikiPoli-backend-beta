@extends('layouts.head')

@section('content')

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-content">
            <h1 class="text-center"><strong>Get To Know Your Candidate</strong></h1>
                <table class="table table-bordered">

                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


              <div class="col-lg-12">
                <p class="search-content">Search for Candidates in your election, get to know them. Contribute posts and add to existing posts.<a href="signin.html"> Get Started</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>


@endsection
