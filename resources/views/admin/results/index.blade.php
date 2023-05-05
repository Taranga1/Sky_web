@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h4>View Result</h4>
        </div>
        <div class="card-body">
            @if(session("message"))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Symbol Number</td>
                        <td>GPA</td>
                        <td>Term</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr>
                            <td>{{$result->id}}</td>
                            <td>{{$result->symbolnumber}}</td>
                            <td>{{$result->gpa}}</td>
                            <td>{{$result->term}}</td>
                            <td><a href="{{ url('result/'.$result->id.'/edit')}}" class="btn btn-success">Edit</a></td>

                            <td>
                                <form action="{{url('result/'.$result->id)}}" method="POST">
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