<?php

namespace App\Http\Controllers\Admin\Companies;

use App\Http\Controllers\Controller;
use App\Models\Admin\Companies\Company;
use Illuminate\Http\Request;
use catalyicHelper;
use Exception;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCompanies =Company::paginate(10);
        return view('admin.pages.companies.index',compact('allCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.companies.create');
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
            $imgPath =storage_path('app/public/admin/companies/');
            $modifyImage = catalyicHelper::saveImage($request->logo, $imgPath);
            Company::create([
                'logo' => $modifyImage,
                'name' => $request->name,
                'website' => $request->website,
            ]);
            parent::successMessage("Company Informatin Created Successfully");
            return redirect()->route('companies.index');
        } catch(Exception $e) {
            parent::dangerMessage("Company Information Does Not Created, Please Try Again");
            return redirect()->back();
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
        $editCompany =Company::find($id);
        return view('admin.pages.companies.edit',compact('editCompany'));

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
            $editCompany =Company::find($id);
            $imgPath = storage_path('app/public/admin/companies/');
            $modifyImage = catalyicHelper::updateImage($request->logo, $editCompany->logo, $imgPath);
            $editCompany->update([
                'logo' => $modifyImage,
                'name' => $request->name,
                'website' => $request->website,
            ]);
            parent::successMessage("Company Informatin Updated Successfully");
            return redirect()->route('companies.index');
        } catch(Exception $e) {
            parent::dangerMessage("Company Information Does Not Updated, Please Try Again");
            return redirect()->back();
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
            $result =Company::find($id);
            $result->delete();
            parent::successMessage("Company Record Deleted Successfully");
            return redirect()->back();
        } catch(Exception $e) {
            parent::dangerMessage("Company Record Does not Deleted, try again");
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
    }
}
