@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <table class="table table-bordered table-hover table-info text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Role-Management</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach ($user->roles as $role )

                                <span class=" text-danger badge badge-info">{{$role->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{url("users/edit/$user->id")}}" class="btn btn-sm btn-warning">Role Management</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

 </div>
@endsection
