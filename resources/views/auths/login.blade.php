<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMIT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "{{asset('style/assets/img/logoars.png')}}" type = "image/x-icon">
    <link href="{{asset('style/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <link href="{{asset('style/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        
    
    <!-- Style CSS -->
    <link href="{{asset('style/assets/css/dmit.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container login ">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign In to <br>Access Application!</h1>
                                    </div>
                                    <form class="user" action=" /postlogin" method="POST" >
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Email  ">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary font-weight-bold btn-user btn-block">LOGIN</button> 
                                    </form>
                                        
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <footer class="sticky-footer bg-transparent">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-gray-100">
                <span class=" font-weight-bold"> 2021&copy; 
                    </span><a href="https://ars.ac.id"  class=" text-decoration-none text-gray-100">
                        ARS University</a>  - Fahreza Genta Pratama -
                         <a href="https://cimahikota.bps.go.id/" class=" text-decoration-none text-gray-100">
                            Badan Pusat Statistik Cimahi</a>  </span>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('style/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('style/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('style/assets/js/sb-admin-2.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('sweetalert::alert')

</body>

</html>