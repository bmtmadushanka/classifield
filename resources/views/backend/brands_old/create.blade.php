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
                        <div>Create new brand</div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card p-3">
                        <h5 class="card-title">New Brand</h5>
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
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('backend._partials.js')
        @include('backend._partials.footer')
