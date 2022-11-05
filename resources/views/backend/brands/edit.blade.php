@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
<div class="dashborad-box mb-0">
    <h4 class="heading pt-0">Edit Brand</h4>
    <div class="section-inforamation">
        <form action="{{ route('brands.update',  $brand->id) }}" method="POST" class="needs-validation" novalidate>
            @method('put')
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" id="validationCustom01" placeholder="brand name" value="{{$brand->brand_name}}" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
       
            </div>
            <button class="btn btn-success" type="submit">Update Details</button>
        </form>
    </div>
</div>
</div>
@endsection