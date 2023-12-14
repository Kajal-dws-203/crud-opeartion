@extends('layout')

@section('content')
    <div class="row pt-5">
        <div>
            <h2>Add new Student</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('students.index')}}"> Back </a>
        </div>
        <div class="pt-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="pt-3">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
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
                    <input type="number" class="form-control" id="standard" name="standard" min="1" max="12" value="{{ $student->standard }}">
                </div>
                <div class="mb-3">
                    <label for="gender"> Gender </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" value="male" {{ $student->gender == "male" ? 'selected' : ''}}>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ $student->gender == "female" ? 'selected' : '' }}>
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{ $student->gender == "other" ? 'selected' : ''}}>
                        <label class="form-check-label" for="gender">
                            Other
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="hobbies"> Hobbies </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="coding" id="coding" name="hobbies[]">
                        <label class="form-check-label" for="hobbies">
                            Coding 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="marketing" id="marketing" name="hobbies[]">
                        <label class="form-check-label" for="hobbies">
                            Marketing 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="dancing" id="dancing" name="hobbies[]">
                        <label class="form-check-label" for="hobbies">
                            Dancing 
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="for"> Date of Birth : </label>
                    <input type="date" name="date_of_birth" id="date_of_birth" name="date_of_birth" class="form-control" max="{{ date('Y-m-d')}}" value="{{ $student->date_of_birth }}">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection