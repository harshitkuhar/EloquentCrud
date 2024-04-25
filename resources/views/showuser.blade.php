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
                        <td>Name: </td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Avatar: </td>
                        <td>{{$user->image}}</td>
                    </tr>
            </tbody>
        </table>
        <a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
    </div>
@endsection
