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
      <a href="{{ route('posts.create')}}" class="btn btn-warning" style="float:right; margin-top:30px;">Enter New Data</a>
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
          <td colspan = 2>Created</td>
        </tr>
      </thead>
      <tbody>
        @foreach($posts->sortBy('age') as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->first_name }} {{ $post->last_name }}</td>
          <td>{{ $post->age }}</td>
          <td>{{ $post->email }}</td>
          <td>{{ $post->secret }}</td>
          <td>
            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning">Edit</a>
          </td>
          <td>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">X</button>
            </form>
          </td>
          <td>{{ $post->updated_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
