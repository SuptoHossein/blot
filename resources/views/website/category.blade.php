﻿@extends('layouts.website')

@section('content')


    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Category</span>
            <h3>{{ $category->name }}</h3>
            @if ($category->description)
              <p>{{ $category->description }}</p>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
          @foreach ($posts as $post)
            
          
            <div class="col-lg-4 mb-4">
              <div class="entry2">
                <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="{{ asset($post->image) }}" alt="Image" class="img-fluid rounded"></a>
                <div class="excerpt">
                <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>

                <h2><a href="{{ route('website.post', ['slug' => $post->slug]) }}">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left">
                    @if ($post->user->image)
                      <img src="{{ asset('storage/user/'.$post->user->image) }}" alt="Image" class="img-fluid">
                    @else
                      <img src="{{ asset('storage/user/user.png') }}" alt="Image" class="img-fluid">
                    @endif
                  </figure>
                  <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>
                  <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span>
                </div>

                  <p>{{ Str::limit($post->description, 100, '...') }}</p>
                  <p><a href="{{ route('website.post', ['slug' => $post->slug]) }}">Read More</a></p>
                </div>
              </div>
            </div>

          @endforeach

        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
              {{ $posts->links() }}
          </div> 
      </div>
    </div>
  </div>

  @endsection


