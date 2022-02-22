<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;


class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function list(){
        $employees = Employee::paginate(10);
        return view('employees.list', compact('employees'));
     }



    /**
     * Display a listing of the resource per company.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::where('company_id',request()->company_id)->paginate(10);
        return view('employees.index',[
            'employees' => $employees,
            'company' => request()->company_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('employees.create',['company'=>request()->company_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->input();
        $data['company_id'] = request()->company_id;
        Employee::create($data);
        return redirect()->route('company.employees.index',['company_id'=>request()->company_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company_id ,Employee $employee)
    {
        return view('employees.edit',['employee'=>$employee, 'company'=>$company_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request)
    {

        $employee = Employee::find($request->employee);
        $employee->update($request->all());
        return redirect()->route('company.employees.index',['company_id'=>request()->company_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company_id, Employee $employee)
    {
        $employee->delete();
        return redirect()->route('company.employees.index',['company_id'=>request()->company_id]);
    }
}
