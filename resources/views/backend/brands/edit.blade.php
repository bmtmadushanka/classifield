@include('backend._partials.header')
<div class="app-main">
    @include('backend._partials.sidebar')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Update Brand</div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card p-3">
                        <h5 class="card-title">Edit Brand</h5>
                        <form action="{{ route('brands.update',  $brand->id) }}" method="POST" class="needs-validation" novalidate>
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" class="form-control" name="brand_name" id="validationCustom01" placeholder="brand name" value="{{$brand->brand_name}}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                       
                            </div>
                            <button class="btn btn-success" type="submit">Update Details</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('backend._partials.js')
        @include('backend._partials.footer')
