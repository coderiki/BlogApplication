@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Tag Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead> 
        <tbody>
            @if($tags->count()>0)
                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->tag}}</td>
                        <td>
                            <a href="{{route('tag.edit', ['id'=> $tag->id])}}" class="btn btn-xs btn-info">
                                <span class="glyphicon glyphicon-pencil">Edit</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('tag.delete', ['id'=>$tag->id])}}" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-pencil">Delete</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5">No Tags Found</th>
                </tr>
            @endif
        </tbody>   
    </table>
@stop