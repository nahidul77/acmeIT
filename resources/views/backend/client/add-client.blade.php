@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage client</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">add client</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- Left col -->
            <section class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3>
                      Add client
                    <a class="btn btn-success btn-sm float-right" href="{{route('clients.view')}}"><i class="fa fa-angle-double-down"></i> view client</a>  
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form id="updateForm" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Client Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                       <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        <font style="color: red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                      </div>
                       <div class="form-group">
                        <img id="showImage" src="{{url('backend/img/no-image.png')}}" height="150px" width="150px" style="border: solid 2px black" alt="">
                      </div>
                       <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                     </form>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
@endsection