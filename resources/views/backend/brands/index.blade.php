@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">

<div class="dashborad-box">
    <h4 class="title">Listing</h4>
    <div class="section-body listing-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Listing Name</th>
                        <th>Date</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luxury Restaurant</td>
                        <td>23 Jan 2020</td>
                        <td class="rating"><span>5.0</span></td>
                        <td class="status"><span class=" active">Active</span></td>
                        <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                    <tr>
                        <td>Gym in Town</td>
                        <td>11 Feb 2020</td>
                        <td class="rating"><span>4.5</span></td>
                        <td class="status"><span class="active">Active</span></td>
                        <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                    <tr>
                        <td>Cafe in Boston</td>
                        <td>09 Jan 2020</td>
                        <td class="rating"><span>5.0</span></td>
                        <td class="status"><span class="non-active">Non-Active</span></td>
                        <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                    <tr>
                        <td class="pb-0">Car Dealer in New York</td>
                        <td class="pb-0">24 Feb 2018</td>
                        <td class="rating pb-0"><span>4.5</span></td>
                        <td class="status pb-0"><span class="active">Active</span></td>
                        <td class="edit pb-0"><a href="#"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
