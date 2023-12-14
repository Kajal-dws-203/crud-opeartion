@extends('layout')

@section('content')
    <div class="row">
        <div>
            <h2 class="pt-5">
                Laravel Crud Opeartion
            </h2>
        </div>
        <div>
            <a href="{{route('students.create')}}" class="btn btn-success w-25 text-center mt-3">Create Student</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="pt-5">
            <table class="table table-striped table-hover"> 
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Standard</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                        <th>Date of Birth</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $key => $stu)
                        <tr>
                            <td>{{ $stu->first_name }}</td>
                            <td>{{ $stu->last_name }}</td>
                            <td>{{ $stu->email }}</td>
                            <td>{{ $stu->standard }}</td>
                            <td>{{ $stu->gender }}</td>
                            <td>{{ $stu->hobbies }}</td>
                            <td>{{ $stu->date_of_birth }}</td>
                            <td>
                                <a href="{{ route('students.show', $stu->id) }}" class="btn btn-secondary"> View </a>
                                <a href="{{ route('students.edit', $stu->id) }}" class="btn btn-secondary"> Edit </a>
                                <a href="{{ route('students.destroy', $stu->id) }}" class="btn btn-secondary"> Delete </a>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection