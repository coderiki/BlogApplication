@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Permission</th>
            <th>Delete</th>
        </thead> 
        <tbody>
        @if($users->count()>0)
            @foreach($users as $user)
                <tr>
                    <td><img src="{{asset($user->profile->avatar)}}" alt="{{$user->name}}" width="100px" height="50px" style="border-radius: 50%;"></td>
                    <td>{{$user->name}}</td>
                    <td>
                        @if($user->admin)
                        <a href="{{route('user.not.admin', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Remove Admin</a>
                        @else
                            <a href="{{route('user.admin', ['id'=>$user->id])}}" class="btn btn-xs btn-success">Make Admin</a>
                        @endif
                    </td>
                    <td>
                    @if(Auth::id() !== $user->id)
						<a href="{{route('user.delete', ['id'=>$user->id])}}" class="btn btn-warning">Delete</a>
					@endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <th colspan="5">No Users Found</th>
            </tr>
        @endif    
        </tbody>   
    </table>
@stop

