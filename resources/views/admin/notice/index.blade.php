@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h4>View Notice</h4>
        </div>
        <div class="card-body">
            @if(session("message"))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $key => $notice)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><b>{{$notice->title}}<b></td>
                            <td>{{$notice->description}}</td>
                            <td>{{$notice->date}}</td>
                            <td><a href="{{ url('notice/'.$notice->id.'/edit')}}" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="{{url('notice/'.$notice->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $users->links("pagination::bootstrap-4") }} --}}
        </div>
    </div>
@endsection