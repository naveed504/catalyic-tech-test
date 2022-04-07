<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Controllers\Controller;
use App\Models\Admin\Companies\Company;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEmployees =User::with('companies')->paginate(10);       
        return view('admin.pages.employes.index',compact('allEmployees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCompanies =Company::all();
        return view('admin.pages.employes.create',compact('allCompanies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            User::create([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'companies_id'  => $request->company_id,
            ]);
            parent::successMessage("Employee Record Created Successfully");
            return redirect()->route('employees.index');
        } catch(Exception $e) {           
            parent::dangerMessage("Employee Record Does Not Created, Please Try Again");
        }      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEmployee =User::find($id);
        $allCompanies =Company::all();
        return view('admin.pages.employes.edit',compact('editEmployee','allCompanies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $employeeRecord =User::find($id);
            $employeeRecord->update([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'companies_id'  => $request->company_id,
            ]);
            parent::successMessage("Employee Record Updated Successfully");
            return redirect()->route('employees.index');
        } catch(Exception $e) {
            parent::dangerMessage("Employee Record Does Not Updated, Please Try Again");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $result =User::find($id);
            $result->delete();
            parent::successMessage("Employee Record Deleted Successfully");
            return redirect()->back();
        } catch(Exception $e) {
            parent::dangerMessage("Employee Record Does not Deleted, try again");
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
    }
}
