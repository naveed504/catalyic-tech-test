@extends('admin.master')
@section('content')
<div class="pd-20 card-box mb-30">
    <div class="wizard-content">
        <form class="" method="post" action="{{route('employees.store')}}" id="createemployee">
            @csrf
            <h5 style="color: blue;margin-top:30px">Employee Information</h5>
            <section style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Employee First Name *:</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Employee Last Name *:</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Employee Email *:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Employee Phone No *:</label>
                            <input type="text" name="phone" class="form-control phoneNumber">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="plancategoryid" class=" control-label mb-1 form-select">Select Company
                            </label>
                            <select id="plancategoryid" name="company_id" aria-label=" Default select example" class=" js-example-basic-multiple form-control cc-number identified visa" data-val="true">
                                @foreach($allCompanies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </section>
            <input type="submit" value="Submit Employee Record" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection