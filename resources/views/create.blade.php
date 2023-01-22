@extends('core')

@section('content')
<form method="post" class="container">

    @csrf
    <label for="title" class="form-label">Post title:</label>
    <input type="text" id="title" name="title" class="form-control">

    <label for="content" class="form-label">Content: </label>
    <textarea type="text" id="content" name="content" class="form-control" rows="20"></textarea>

    <input type="submit" value="Submit" class="btn btn-danger mt-2">

</form>
@endsection