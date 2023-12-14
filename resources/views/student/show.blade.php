@extends('layout')

@section('content')
    <div class="row pt-5">
        <div>
            <h2>Student Details</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('students.index')}}"> Back </a>
        </div>

        <div class="pt-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $student->first_name }}">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ $student->email }}">
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" style="height: 100px" name="address">{{ $student->address }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="standard" class="form-label">Standard</label>
                    <input type="text" class="form-control" id="standard" name="standard" value="{{ $student->standard }}">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $student->gender }}">
                </div>
                <div class="mb-3">
                    <label for="hobbies" class="form-label">Hobbies</label>
                    <input type="text" class="form-control" id="hobbies" name="hobbies" value="{{ $student->hobbies }}">
                </div>
                <div class="mb-3">
                    <label for="standard" class="form-label">Date of Birth </label>
                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}">
                </div>
            </form>
        </div>
    </div>
@endsection