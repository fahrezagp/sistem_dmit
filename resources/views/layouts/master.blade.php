<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "{{asset('style/assets/img/logoars.png')}}" type = "image/x-icon">
    <link href="{{asset('style/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('style/assets/vendor/linearicons/style.css')}}">    
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    
    <!-- Style CSS -->
    <link href="{{asset('style/assets/css/dmit.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    
  
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.includes._sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.includes._topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <br>
            <footer class="sticky-footer bg-white shadow">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class=" font-weight-bold"> 2021&copy; </span><a href="https://ars.ac.id"  class="text-dark text-decoration-none">ARS University</a>  - Fahreza Genta Pratama - <a href="https://cimahikota.bps.go.id/" class="text-dark text-decoration-none">Badan Pusat Statistik Cimahi</a>  </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Keluar dari aplikasi?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>


    @include('sweetalert::alert')
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('style/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('style/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('style/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('style/assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('style/assets/js/sb-admin-2.js')}}"></script>
    <script src="{{asset('style/assets/js/demo/datatables-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>

</html>