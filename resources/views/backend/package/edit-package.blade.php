@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage Package</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Update pack</li>
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
                      Update Package
                    <a class="btn btn-success btn-sm float-right" href="{{route('packages.view')}}"><i class="fa fa-list"></i> view pack</a>  
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form id="updateForm" action="{{route('packages.update', $package->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" value="{{$package->price}}" class="form-control" id="price" placeholder="Enter price">
                        <font style="color: red">{{($errors->has('price'))?($errors->first('price')):''}}</font>
                     </div>
                     <div class="form-group">
                      <label for="speed">Speed</label>
                      <input type="number" name="speed" value="{{$package->speed}}" class="form-control" id="speed" placeholder="Enter speed">
                      <font style="color: red">{{($errors->has('speed'))?($errors->first('speed')):''}}</font>
                   </div>
                     <div class="form-group">
                      <label for="limit">Limit</label>
                      <input type="text" name="limit" value="{{$package->limit}}" class="form-control" id="limit" placeholder="Enter limit">
                      <font style="color: red">{{($errors->has('limit'))?($errors->first('limit')):''}}</font>
                    </div>
                      <div class="form-group">
                        <label for="optics">Optics</label>
                        <input type="text" name="optics" value="{{$package->optics}}" class="form-control" id="optics" placeholder="Enter optics">
                        <font style="color: red">{{($errors->has('optics'))?($errors->first('optics')):''}}</font>
                    </div>
                      <div class="form-group">
                        <label for="ip">Ip</label>
                        <input type="text" name="ip" value="{{$package->ip}}" class="form-control" id="ip" placeholder="Enter ip">
                        <font style="color: red">{{($errors->has('ip'))?($errors->first('ip')):''}}</font>
                    </div>
                      <div class="form-group">
                        <label for="support">Support</label>
                        <input type="text" name="support" value="{{$package->support}}" class="form-control" id="support" placeholder="Enter support">
                        <font style="color: red">{{($errors->has('support'))?($errors->first('support')):''}}</font>
                    </div> 
                       <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Update</button>
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