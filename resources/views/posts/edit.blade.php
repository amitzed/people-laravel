@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Update Data</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="post">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" value={{ $post->first_name }}>
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" value={{ $post->last_name }}>
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" value={{ $post->age }}>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value={{ $post->email }}>
      </div>

      <div class="form-group">
        <label for="secret">Secret:</label>
        <input type="text" class="form-control" name="secret" value={{ $post->secret }}>
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
    </form>
  </div>
</div>
@endsection
