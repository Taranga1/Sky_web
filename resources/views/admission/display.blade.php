@extends('layouts.admin_app')

@section('content')
<style>
    img {
  border-radius: 50%;
}
</style>
    <div class="container-fluid px-4">
        <div class="card-header">
            <h4>View Admission</h4>
        </div>
        <div class="card-body">
            @if(session("message"))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Student's Name</td>
                        <td>Father's name</td>
                        <td>Mother's name</td>
                        <td>Address 1</td>
                        <td>Next Class</td>
                        <td>Gmail</td>
                        <td>Phones</td>
                        <td>GPA</td>
                        <td>DOB</td>
                        {{-- <td>Description</td> --}}
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admissions as $key => $admission)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                <img src="{{asset('uploads/useradmissionimage/'.$admission->image)}}" alt="broken" width="38px" height="38px" border-radius: 50%>
                                &nbsp;
                                {{$admission->fullname}}
                            </td>
                            <td>{{$admission->fathername}}</td>
                            <td>{{$admission->mothername}}</td>
                            <td>{{$admission->address1}}</td>
                            <td>{{$admission->nextclass}}</td>
                            <td>{{$admission->gmail}}</td>
                            <td>
                                {{$admission->phone1}}<br>
                                {{$admission->phone2}}
                            </td>
                            <td>{{$admission->gpa}}</td>
                            <td>{{$admission->dob}}</td>
                            {{-- <td>{{$admission->description}}</td> --}}
                            
                            
                            <td>
                                <form action="{{url('admission/'.$admission->id)}}" method="POST">
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