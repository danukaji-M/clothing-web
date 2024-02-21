@extends('layout.app')
@section('title', 'Create Account')
@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <span class="text-light h2 fw-bold ">Create New Account</span>
            </div>
            <div class="col-md-6 rounded-4 " style="background: #e4e7f0;">

                <div class="row">
                    <div id="main" class="col-12 bg-danger-subtle text-danger text-center rounded-4 d-none ">error</div>
                    <div class="col-12 col-lg-6 ">

                        <label for="" class="form-label">First name</label>
                        <br>
                        <input type="text" id="fn" class="form-control" required>
                        <div id="fn-error" class="d-none form-control rounded-5 bg-danger-subtle text-danger">first name
                            error</div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Last Name</label>
                        <br>
                        <input type="text" id="ln" class="form-control" required>
                        <div id="lne" class=" d-none form-control rounded-5 bg-danger-subtle text-danger">last name
                            error</div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">email</label>
                        <br>
                        <input type="email" id="email" class="form-control" required>
                        <div id="eme" class="d-none form-control rounded-5 bg-danger-subtle text-danger">email error
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Mobile</label>
                        <br>
                        <input type="text" id="mb" class="form-control" required>
                        <div id="mbe" class=" d-none form-control rounded-5 bg-danger-subtle text-danger">mobile error
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Password</label>
                        <br>
                        <input type="password" id="ps1" class="form-control" required>
                        <div id="ps1e" class=" d-none form-control rounded-5 bg-danger-subtle text-danger">password
                            error</div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Re Enter Password</label>
                        <br>
                        <input type="password" id="ps2" class="form-control" required>
                        <div id="ps2e" class="form-control rounded-5 bg-danger-subtle text-danger d-none">password
                            error</div>
                    </div>
                    <div class="col-12 ">
                        <label for="" class="form-label">Select Gender</label>
                        <select class="form-control" id="gender">
                            <option value="o">Select Gender</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                        <div id="gne" class="form-control rounded-5 bg-danger-subtle text-danger d-none">gender error
                        </div>
                    </div>
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                </div>
                <div class="input-group mb-3">
                    <button type="submit" onclick="createAccount();" class="btn btn-lg btn-primary w-100 fs-6">Create
                        Account</button>
                </div>
                <div class="input-group mb-3">
                    <<a class=" text-decoration-none h6 btn btn-lg btn-light w-100 fs-6" href="{{ asset('/signin') }}">sign
                        in</a>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
@endsection
