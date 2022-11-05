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
                        <div>Ads Manager</div>
                    </div>
                    <div class="page-title-actions">
                        <a type="button" href="{{ route('ads.create') }}" title="Example Tooltip"
                            data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i> Create a new Ads
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">All Ads

                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Title</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Date & time</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($ads)
                                        @foreach ($ads as $data)
                                            <tr>
                                                <td class="text-center text-muted">{{ $data->id }}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle"
                                                                        src="{{ asset('backend/assets/images/avatars/3.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{ $data->title }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $data->description }}</td>
                                                <td class="text-center">
                                                    <p>{{ $data->found_date }} | {{ $data->found_time }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p>{{ $data->location }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{ route('ads.destroy', $data->id) }}" method="POST">
                                                        <a href="{{ route('ads.edit', $data->id) }}"
                                                            class="btn btn-outline-primary">Edit</a>
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                                            <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                                        </button>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend._partials.js')
        @include('backend._partials.footer')
