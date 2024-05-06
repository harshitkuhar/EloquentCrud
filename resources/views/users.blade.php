@extends('mainlayout')

@section('title')
    All Users
@endsection

@section('content')
    <div class="col-md-10">
        <h2 class="mb-3">All Users</h2>
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <a href="{{route('user.create')}}" class="btn btn-primary mb-2">Add New User</a>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Avatar</th>
                <th scope="col">View</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td width="20%"><img src="{{asset('/storage/' . $user->image)}}" alt="" class="img-fluid" style="width:50%;"></td>
                        <td><a href="{{route('user.show', $user->id)}}" class="btn btn-info btn-sm">View</a></td>
                        <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                        <td>
                            <form action="{{route('user.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="askDelete()">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')

<script>
    function askDelete(){
        alert("You want to delete" {{$user->name}});
    }
</script>

@endsection
