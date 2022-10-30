<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    @include('backend._partials.style')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend._partials.header')     
        <div class="app-main">
            @include('backend._partials.sidebar')     
                <a href="#" class="btn btn-success">Add New Ads</a>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date & time</th>
                              <th>Location</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @isset($ads)                                    
                              @foreach ($ads as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->location}}</td> 
                                      <td>
                                        <form action="{{ route('delete_ads', $data->id) }}" method="POST">
                                     
                                            <a href="{{ route('edit_ads', $data->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                   </tr> 
                                @endforeach
                                @endisset
                            </tbody>
                          </table>
                    </div>
                     @include('backend._partials.footer')
                    
                </div>
             @include('backend._partials.js')


        </div>
    </div>


</body>
</html>
