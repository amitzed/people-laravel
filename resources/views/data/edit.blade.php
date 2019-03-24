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
    <form action="{{ route('data.update', $data->id) }}" method="post">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" value={{ $data->first_name }}>
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" value={{ $data->last_name }}>
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" name="age" value={{ $data->age }}>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value={{ $data->email }}>
      </div>

      <div class="form-group">
        <label for="secret">Secret:</label>
        <input type="text" class="form-control" name="secret" value={{ $data->secret }}>
      </div>
      <button type="submit" class="btn btn-info">Update</button>
    </form>
  </div>
</div>
@endsection
