
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
        <h3>Listing Location</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Enter Your Address" id="address">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="city">City</label>
                        <input type="text" name="city" placeholder="Enter Your City" id="city">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="state">State</label>
                        <input type="text" name="state" placeholder="Enter Your State" id="state">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="country">Country</label>
                        <input type="text" name="country" placeholder="Enter Your Country" id="country">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="latitude">Google Maps latitude</label>
                        <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="longitude">Google Maps longitude</label>
                        <input type="text" name="longitude" placeholder="Google Maps longitude" id="longitude">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="single-add-property">
        <h3>Extra Information</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="dropdown faq-drop no-mb">
                        <label for="age">Building Age <span>(optional)</span></label>
                        <button class="pro-age dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true">
                            Select Age
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu faq-drop-open" aria-labelledby="age">
                            <li>0-1 years</li>
                            <li>0-5 years</li>
                            <li>0-10 years</li>
                            <li>0-15 years</li>
                            <li>0-20 years</li>
                            <li>0-50 years</li>
                            <li>50+ years</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="dropdown faq-drop no-mb">
                        <label for="bed">Bedrooms <span>(optional)</span></label>
                        <button class="pro-bed dropdown-toggle" type="button" id="bed" data-toggle="dropdown" aria-haspopup="true">
                            Select Bedrooms
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu faq-drop-open" aria-labelledby="bed">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="dropdown faq-drop no-mb last">
                        <label for="bath">Bathrooms <span>(optional)</span></label>
                        <button class="pro-bath dropdown-toggle" type="button" id="bath" data-toggle="dropdown" aria-haspopup="true">
                            Select Bathrooms
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu faq-drop-open" aria-labelledby="bath">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-add-property">
        <h3>Property Features</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pro-feature-add pl-0">
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Air Conditioning</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Swimming Pool</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-c" type="checkbox" name="check">
                                    <label for="check-c">Central Heating</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-d" type="checkbox" name="check">
                                    <label for="check-d">Laundry Room</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-e" type="checkbox" name="check">
                                    <label for="check-e">Gym</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-g" type="checkbox" name="check">
                                    <label for="check-g">Alarm</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-h" type="checkbox" name="check">
                                    <label for="check-h">Window Covering</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-i" type="checkbox" name="check">
                                    <label for="check-i">Refrigerator</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-j" type="checkbox" name="check">
                                    <label for="check-j">TV Cable & WIFI</label>
                                </div>
                            </div>
                        </li>
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-k" type="checkbox" name="check">
                                    <label for="check-k">Microwave</label>
                                </div>
                            </div>
                        </li>
                    </ul>
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