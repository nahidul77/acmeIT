@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage popular Package</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">popular package</li>
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
                      popular package List
                     @if ($popularCount<1)
                     <a class="btn btn-success btn-sm float-right" href="{{route('populars.add')}}"><i class="fa fa-plus-circle"></i> Add popular Package</a>
                     @endif   
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Speed</th>
                          <th>Price</th>
                          <th>Limit</th>
                          <th>Optics</th>
                          <th>Ip</th>
                          <th>Support</th>
                          <th>image</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($populars as $key => $popular)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$popular->speed}}</td>
                                <td>{{$popular->price}}</td>
                                <td>{{$popular->limit}}</td>
                                <td>{{$popular->optics}}</td>
                                <td>{{$popular->ip}}</td>
                                <td>{{$popular->support}}</td>
                                <td><img src="{{(!empty($popular->image))?url('upload/popular_images/'.$popular->image):url('backend/img/no-image.png')}}" height="60px" width="80px"></td>
                                <td>
                                    <a title="Edit" class="btn btn-primary btn-sm" href="{{route('populars.edit', $popular->id)}}"><i class="fa fa-edit"></i></a>
                                    <a id="delete" title="Delete" class="btn btn-danger btn-sm" href="{{route('populars.delete', $popular->id)}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>SL.</th>
                          <th>Speed</th>
                          <th>Price</th>
                          <th>Limit</th>
                          <th>Optics</th>
                          <th>Ip</th>
                          <th>Support</th>
                          <th>image</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
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