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
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Avatar Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">
                @error('image')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
@endsection
