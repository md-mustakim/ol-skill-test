<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Notifications\EmailNotification;
use Brian2694\Toastr\Facades\Toastr;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {

        return view('employee.index', ['employees' => Employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {

        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:employees'],
            'phone' => 'required|numeric|digits:11'
        ]);

        try {
            $store = Employee::create($attributes);
            if ($store){
                Toastr::success("Added Success");
                $employee = Employee::find($store->id);
                //$employee->notify(new EmailNotification());
                Notification::send($employee, new EmailNotification($employee));
                return redirect()->route('employee.index');
            }
            Toastr::error("Added Failed");
            return back()->withInput($request->all());

        }catch (Exception $exception){
            Toastr::error($exception->getMessage());
            return back()->withInput($request->all());
        }
    }



}
