@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Data</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Age</td>
          <td>Email</td>
          <td>Secret</td>
          <td colspan = 2>Update</td>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
        <tr>
          <td>{{ $data->id }}</td>
          <td>{{ $data->first_name }} {{ $data->last_name }}</td>
          <td>{{ $data->age }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->secret }}</td>
          <td>
            <a href="{{ route('data.edit',$data->id) }}" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <form action="{{ route('data.destroy', $data->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">X</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
