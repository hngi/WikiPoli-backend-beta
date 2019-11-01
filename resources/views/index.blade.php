@extends('layouts.head')

@section('content')

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-content">
            <h1 class="text-center"><strong>Get To Know Your Candidate</strong></h1>
            <form action="/search" method="get">
              <div class="input-group">
                <input type="search" name="search" class="form-control"  placeholder="Enter Politician's Name" >
                <div class="input-group-append">
                  <button type="submit" class="button-search">Search</button>
                </div>
              </div>

            </form>
              <div class="col-lg-12">
                <p class="search-content">Search for Candidates in your election, get to know them. Contribute posts and add to existing posts.<a href="signin.html"> Get Started</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>


@endsection
