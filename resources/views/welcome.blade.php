@extends('core')


@section('content')
<div class="container text-center">
<div class="row">
<div class="col-6 mt-2">
    <h3>Latest posts: </h3>
    @foreach($latestPosts as $post)
    <a href={{"posts/".$post->id}} style="text-decoration: none; color: black">
        <div class="border border-dark m-2">
            <h4 class="text-start ps-1">{{$post->title}}</h4>
        </div>
    </a>
    @endForEach

</div>
<div class="col-1"></div>
    <div class="col-5 mt-5">
        <img src='/storage/images/laravel.png'>
        <p class="fw-semibold mt-3">Welcome to the blog! This blog describes the topics that I've found the most interesting (and challenging!) throughout
            my journey in learning Backend Development. The blog is written in Laravel, with the pages served from blade templates. </p>
    </div>
</div>
</div>
@endsection

@section('style')
<style>img{margin: 5px; height: 300px;}</style>
@endsection