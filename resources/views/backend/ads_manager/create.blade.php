
@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2 widget-boxed">
    <div class="single-add-property">
        <h3>Basic Informations</h3>
        <div class="property-form-group">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <label for="title">Listing Title</label>
                            <input type="text" name="title" id="title" placeholder="Enter your Listing Title">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <label for="description">Listing Description</label>
                            <textarea id="description" name="pro-dexc" placeholder="Describe about your Listing"></textarea>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="dropdown faq-drop mb-0">
                            <label for="dropdownmissdcall">Category</label>
                            <button class="pro-status dropdown-toggle" type="button" id="dropdownmissdcall" data-toggle="dropdown" aria-haspopup="true">
                                Select status
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu faq-drop-open" aria-labelledby="dropdownmissdcall">
                                <li>Restaurants</li>
                                <li>Hotels</li>
                                <li>Cafe</li>
                                <li>GYM</li>
                                <li>Events</li>
                                <li>Cinema</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="no-mb">
                            <label for="price">Keywords</label>
                            <input type="text" name="price" placeholder="Keywords should be separated by commas" id="price">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="single-add-property">
        <h3>Gallery</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-md-12">
                    <form action="https://code-theme.com/file-upload" class="dropzone"></form>
                </div>
            </div>
        </div>
    </div>
    <div class="single-add-property">
        <h3>Contact Information</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Name</label>
                        <input type="text" placeholder="Enter Your Name" id="con-name" name="con-name">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Username</label>
                        <input type="text" placeholder="Enter Your Username" id="con-user" name="con-user">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="con-email">Email</label>
                        <input type="email" placeholder="Enter Your Email" id="con-email" name="con-email">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="con-phn">Phone</label>
                        <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="con-phn">
                    </p>
                </div>
            </div>
        </div>
        <div class="add-property-button pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="prperty-submit-button">
                        <button type="submit">Submit Property</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection