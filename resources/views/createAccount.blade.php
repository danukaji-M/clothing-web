<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }

        /*------------ Login container ------------*/
        .box-area {
            width: 930px;
        }

        /*------------ Right box ------------*/
        .right-box {
            padding: 40px 30px 40px 40px;
        }

        /*------------ Custom Placeholder ------------*/
        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        /*------------ For small screens------------*/
        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
                    <div id="main" class="col-12 bg-danger-subtle text-danger text-center rounded-4 d-none ">error
                    </div>
                    <div class="col-12 col-lg-6 ">

                        <label for="" class="form-label">First name</label>
                        <br>
                        <input type="text" id="fn" class="form-control" required>
                        <div id="fn-error" class="d-none form-control rounded-5 bg-danger-subtle text-danger">first
                            name
                            error</div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Last Name</label>
                        <br>
                        <input type="text" id="ln" class="form-control" required>
                        <div id="lne" class=" d-none form-control rounded-5 bg-danger-subtle text-danger">last
                            name
                            error</div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">email</label>
                        <br>
                        <input type="email" id="email" class="form-control" required>
                        <div id="eme" class="d-none form-control rounded-5 bg-danger-subtle text-danger">email
                            error
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <label for="" class="form-label">Mobile</label>
                        <br>
                        <input type="text" id="mb" class="form-control" required>
                        <div id="mbe" class=" d-none form-control rounded-5 bg-danger-subtle text-danger">mobile
                            error
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
                        <div id="gne" class="form-control rounded-5 bg-danger-subtle text-danger d-none">gender
                            error
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
                    <<a class=" text-decoration-none h6 btn btn-lg btn-light w-100 fs-6" href="{{ asset('/signin') }}">
                        sign
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
    <script src="{{asset("js/script.js")}}"></script>
</body>

</html>
