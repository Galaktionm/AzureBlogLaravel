@extends('core')

@section('title', $post->title)

@section('post-title')
<?php echo($post->title) ?>
@endsection

@section('content')
<?php echo($post->content) ?>
@endsection

@section('style')
<style>img{ float: left; margin: 5px; height: 300px;}</style>
@endsection



