@extends('mainlayout')

@section('title')
    User Detail
@endsection

@section('content')
    <div class="col-md-10">
        <h2 class="mb-3">User Detail</h2>
        <table class="table table-striped table-bordered">
            <tbody>
                    <tr>
                        <td><b>Name:</b> </td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b> </td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td><b>Avatar:</b> </td>
                        <td><img src="{{asset('/storage/' . $user->image)}}" alt="" class="img-fluid" style="width:15%;"></td>
                    </tr>
            </tbody>
        </table>
        <a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
    </div>
@endsection
