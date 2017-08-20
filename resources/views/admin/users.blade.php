@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        You are logged in as admin!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="usersTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Username</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>
                                <a href="/admin/edit-user/{{$user->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/delete-user/{{$user->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                            <td>
                                <span class="label label-success">
                                    {{$user->is_active == 1 ? 'Active' : 'Inactive'}}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection