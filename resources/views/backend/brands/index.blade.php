@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">

<div class="dashborad-box">
    <h4 class="title">Listing</h4>
    <a type="button" href="{{ route('brands.create') }}" title="Example Tooltip"
    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark float-right mb-2">
    <i class="fa fa-star"></i> Create a new brand
    </a>
    <div class="section-body listing-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Brand Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @isset($brands)
                        @foreach ($brands as $data)
                            <tr>
                                <td class="text-center text-muted">{{ $data->id }}</td>
                                <td>
                        
                                    <div class="widget-heading">{{ $data->brand_name }}</div>
                               
                                </td>
                               
                                <td class="text-center">
                                    <form action="{{ route('brands.destroy', $data->id) }}" method="POST">
                                        <a href="{{ route('brands.edit', $data->id) }}"
                                            >
                                            <i class="fa fa-pencil"></i></a>
                                        </a>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="mr-2 ml-2">
                                            <i class="fa fa-trash"></i></a>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    @endisset
    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
