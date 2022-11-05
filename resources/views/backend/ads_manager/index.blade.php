@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2 mb-4">
    
     <div class="my-properties mt-5">
         <table class="table-responsive">
             <thead>
                 <tr>
                     <th class="pl-2">My Listings</th>
                     <th>Date Added</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                @isset($ads)
                @foreach ($ads as $data)
                    <tr>
                        <td>
                            <div class="inner">
                                <a href="listing-details.html"><h2>{{ $data->location }} </h2></a>
                                <figure><i class="lni-map-marker"></i>{{ $data->description }}</figure>
                                <ul class="starts text-left mb-0">
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="mb-0"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="ml-3">(6 Reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <p>{{ $data->found_date }} | {{ $data->found_time }}</p>
                        </td>
                        <td>
                            <form action="{{ route('ads.destroy', $data->id) }}" method="POST">
                                <a href="{{ route('ads.edit', $data->id) }}"
                                    >
                                    <i class="fa fa-pencil"></i></a>
                                </a>
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="mr-2 btn-icon btn-icon-only ml-2">
                                    <i class="fa fa-trash "></i></a>
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            @endisset
                 
             </tbody>
         </table>
         <div class="pagination-container">
             <nav>
                 <ul class="pagination">
                     <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                 </ul>
             </nav>
         </div>
     </div>
 </div>
@endsection