@extends('layouts.app')
@section('title', 'Employee Registration')
@section('container')
    <div class="container">
        <div class="card card-light">
            <div class="card-header">Employee registration</div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('employee.store') }}" class="" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-2">Name</label>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="email" class="col-md-2">Email</label>
                        <div class="col-md-10 mb-3">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="phone" class="col-md-2">Phone</label>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control is-invalid" id="phone" name="phone" value="{{ old('phone') }}">
                            <div class="">
                                Please choose a username.
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>




                </form>
            </div>
        </div>
    </div>
@endsection
