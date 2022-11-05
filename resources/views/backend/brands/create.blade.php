@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
<div class="dashborad-box mb-0">
    <h4 class="heading pt-0">Add New Brand</h4>
    <div class="section-inforamation">
        <form action="{{ route('brands.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" id="validationCustom01" placeholder="brand name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
               
            </div>
            <button class="btn btn-success" type="submit">Save Details</button>
        </form>
    </div>
</div>
</div>
@endsection