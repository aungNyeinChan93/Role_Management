@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-8 offset-2">
           <form action="{{url("users/update/$user->id")}}" method="POST">
            @csrf
                <input type="text" name="name" value="{{$user->name}}" class="form-control my-2">
                @foreach ($roles as $role )
                    <input class="my-2" type="checkbox" name="roles[]" value="{{$role->id}}
                    "
                    @foreach ($user->roles as $userRole )
                        @if($userRole->id == $role->id)
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="my-2" for="roles">{{$role->name}}</label>
                @endforeach
                <input type="submit" class="d-block btn btn-info btn-sm mt-2" value="Confrim">
           </form>
        </div>
    </div>

 </div>
@endsection
