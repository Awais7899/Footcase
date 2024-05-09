<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />





    @vite('resources/js/admin/main.js')

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" />



    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    @include('admin.header')
    <!-- ======= Sidebar ======= -->
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    @include('admin.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
        <table id="user_table" class="display text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </main>
    <!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }} "></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

</body>

</html>