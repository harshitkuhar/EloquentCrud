@extends('mainlayout')

@section('title')
Update User
@endsection

@section('content')
    <div class="col-md-10">
        <h2 class="mb-3">Update User</h2>
        <form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Avatar Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{$user->image}}">
                <img src='{{asset('/storage/' . $user->image)}}' alt='' class='img-fluid my-2' style='width:10%;'>
                @error('image')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
