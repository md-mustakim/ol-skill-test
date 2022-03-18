@extends('layouts.app')
@section('title', 'Employee list')
@section('container')
    <div class="container">
        <div class="card card-light">
            <div class="card-header d-flex justify-content-between">
                <div class="">Employee list</div>
                <div class="">
                    <a href="{{ route('employee.create') }}" class="">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm table-responsive-lg table-responsive-md">
                    <thead class="thead-light">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $employee->name }}</td>
                            <td>
                                <a href="mailto:{{ $employee->email }}" class="">{{ $employee->email }}</a>
                            </td>
                            <td>
                                <a href="tel:{{ $employee->phone }}" class="">{{ $employee->phone }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
