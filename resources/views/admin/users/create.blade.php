@extends('layouts.app')

@section('content')

    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Create New User
        </div>
        <div class="panel-body">
            <form action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">User Name : </label>
                    <input type="text" name="name" class="form-control" place-holder="Enter New Users Name Here">
                </div>
				<div class="form-group">
                    <label for="email">Email : </label>
                    <input type="email" name="email" class="form-control" place-holder="Email">
                </div>
                <div class="form-group">
                    <div class="text-left">
                        <button class="btn btn-success" type="submit">Store User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop