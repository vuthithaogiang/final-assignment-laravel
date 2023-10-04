@extends("layouts.app")
@section("title")
    <h1>Create a student

    </h1>
@endsection
@section("main")
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Student</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/student/create")}}" >
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" value="{{old("sid")}}" name="sid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
                            @error("sid")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" value="{{old("name")}}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age</label>
                            <input type="number" min="18"  value="{{old("age")}}" name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
                            @error("age")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" value="{{old("address")}}" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                            @error("address")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telephone</label>
                            <input type="text" value="{{old("telephone")}}" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Enter Telephone">
                            @error("telephone")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
