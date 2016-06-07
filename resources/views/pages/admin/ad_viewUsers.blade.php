@extends('pages.adminMasterPage')

@section('CONTENT')

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>User</td>
                    <td>Action</td>
                    <td>Status</td>

                    </thead>
                    <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>

                            <td><a href="{{ action('UserController@update', $user->id)}}"><button class="btn btn-success">Accept</button></a>
                                <a href="{{action('UserController@delete', $user->id)}}"><button class="btn btn-danger">Delete</button></a></td>
                            <td>{{$user->status}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop