@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">

<div class="dashborad-box">
    <h4 class="title">Seller Management</h4>
    <a type="button" href="{{ route('users.create') }}" title="Example Tooltip"
                            data-placement="bottom" class="btn-shadow mr-3 btn btn-dark float-right">
                            <i class="fa fa-star"></i>  Create New Seller
                        </a>
    <div class="section-body listing-table">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($data as $key => $user)
                        <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>
                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                            @endif
                        </td> --}}
                        <td>
                            <a href="{{ route('users.edit',$user->id) }}">
                                <i class="fa fa-pencil"></i></a>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            <button class="mr-2 btn-icon btn-icon-only ml-2">
                                <i class="fa fa-trash "></i></a>
                            </button>
                            {!! Form::close() !!}
                        </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
