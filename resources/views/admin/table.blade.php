<x-admin-master>

    @section('database')

        <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Users <small>Some examples to get you started</small></h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Well Wishers🎉🥰🎉🥰</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                                Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                                            </p>

                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Created At</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($birthdays as $birthday)
                                                <tr>
                                                    <td>{{$birthday->id}}</td>
                                                    <td>{{$birthday->name}}</td>
                                                    <td>{{$birthday->email}}</td>
                                                    <td>{{$birthday->message}}</td>
                                                    <td>{{$birthday->created_at}}</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        @endsection

    @section('databases')

            <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

        @endsection
</x-admin-master>
