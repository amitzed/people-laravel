@extends('base')

@section('main')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3" style="float:left; margin:0;">Data</h1>
    <div>
      <a href="{{ route('data.create')}}" class="btn btn-warning" style="float:right; margin-top:30px;">Enter New Data</a>
    </div>
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
        @foreach($data->sortBy('age') as $data)
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
