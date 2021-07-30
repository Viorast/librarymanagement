@extends('_layouts.app')

@section('title', 'register')

@section('content')

    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <form  action="success.php" method="">
                    <div class="form-group row">
                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                        <div class="col-md-6">
                            <input type="text" id="full_name" class="form-control" name="full-name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="text" id="email_address" class="form-control" name="email-address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                        <div class="col-md-6">
                            <input type="text" id="user_name" class="form-control" name="username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                        <div class="col-md-6">
                            <input type="text" id="phone_number" class="form-control">
                        </div>
                    </div>
              </div>
            </div>
    
          </div>
    </div>
@endsection