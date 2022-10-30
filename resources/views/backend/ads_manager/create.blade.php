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
                        <div>Create a New Ad</div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card p-3">
                        <h5 class="card-title">New Ad</h5>
                        <form action="{{ route('ads.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" class="form-control" name="title" id="validationCustom01" placeholder="title" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Found Date</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="found_date" required>
                                        <div class="invalid-feedback">
                                            Please choose a telephone.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Time</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="found_time" placeholder="Time" required>
                                        <div class="invalid-feedback">
                                            Please choose a time.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="location" placeholder="location" required>
                                        <div class="invalid-feedback">
                                            Please choose a location.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="bag_img" required>
                                    <div class="invalid-feedback">
                                        Please provide a image.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Description</label>
                                    <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
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
