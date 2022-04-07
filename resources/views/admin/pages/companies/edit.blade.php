@extends('admin.master')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="wizard-content">
            <form class="" method="post" action="{{route('companies.update',$editCompany->id)}}" enctype="multipart/form-data" id="createcompany">
                @csrf
                @method('PUT')
                <h5 style="color: blue;margin-top:30px">Company Information</h5>
                <section style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Name *:</label>
                                <input type="text" value="{{$editCompany->name ?? ''}}" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Logo *:</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Company Website *:</label>
                                <input type="text" name="website" value="{{$editCompany->website ?? ''}}" class="form-control">
                            </div>
                        </div>
                    </div>
                </section>
                <input type="submit" value="Submit Company Record" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection