@extends("layouts.app")

@section("title")
    <h1>List Students</h1>
    @if(session()->has("success"))
        <div class="alter alert-success" role="alert">
            {{session("success")}}
        </div>
    @endif
@endsection
@section("main")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Created at</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $item)
                            <tr>
                                <td>{!! $item->sid !!}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->telephone}}</td>
                                <td>
                                    <a href="{{url("/admin/invoice",["order"=>$item])}}" class="btn btn-outline-info small">View</a>
                                    <a href="{{url("/admin/invoice",["order"=>$item])}}" class="btn btn-outline-info small">Edit</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {!! $students->links("pagination::bootstrap-4") !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
