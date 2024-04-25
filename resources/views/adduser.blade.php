@extends('mainlayout')

@section('title')
Add User
@endsection

@section('content')
    <div class="col-md-10">
        <h2 class="mb-3">Add User</h2>
        <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Avatar Image</label>
                <input type="file" class="form-control-file" name="image">
              </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
@endsection
