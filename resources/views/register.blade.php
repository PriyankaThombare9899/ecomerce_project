@extends('master')
@section('content')
    

   <div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
            <form action="/register" method="POST">
                @csrf
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="username" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>

              </form>

            </div>
            </div>
        </div>
    </div>
   </div> 


@endsection