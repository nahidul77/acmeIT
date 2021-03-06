@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Manage User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Add User</li>
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
                      Add User
                    <a class="btn btn-success btn-sm float-right" href="{{route('users.view')}}"><i class="fa fa-list"></i> View Users</a>  
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                   <form id="storeForm" action="{{route('users.store')}}" method="POST">
                       @csrf
                       <div class="form-group">
                        <label for="usertype">User Type</label>
                        <select class="custom-select form-control-border" name="usertype" id="usertype">
                          <option>---Select Role---</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                        <font style="color: red">{{($errors->has('usertype'))?($errors->first('usertype')):''}}</font>
                      </div>
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                        <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter email">
                        <font style="color: red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                      </div>
                      <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
      <script>
        $(function () {
          $('#storeForm').validate({
            rules: {
                usertype: {
                required: true,
              },
              name: {
                required: true,
              },
              email: {
                required: true,
                email: true,
              },
              password: {
                required: true,
                minlength: 6
              },
              password2: {
                required: true,
                equalTo: '#password'
              },
            },
            messages: {
                usertype: {
                required: "Please Select User Role",
              },
              name: {
                required: "Please enter Username",
              },
              email: {
                required: "Please enter a email address",
                email: "Please enter a vaild email address"
              },
              password: {
                required: "Please enter password",
                minlength: "Your password must be at least 6 characters long"
              },
              password2: {
                required: "Please enter confirm password",
                equalTo: "Confirm password does not match"
              },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            }
          });
        });
        </script>
@endsection