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
        <div class="d-flex flex-row justify-content-end">
            <button class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#basicModal">Add
                sub category</button>
        </div>

        <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Sub Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="addSubCategory">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="activeStatus" aria-label="Default select example" required>
                                        <option selected>Select status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-label">Ctaegory</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="category_id" aria-label="Default select example" required>
                                        <option selected>Select Category</option>

                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="categoryEdit" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="editSubCategory">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="subCategoryTitle" name="title" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-12">
                                    <select class="form-select" id="subCategoryStatus" name="active_status" aria-label="Default select example" required>
                                        <option selected>Select status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-label">Ctaegory</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="category_id" id="categoryStatus" aria-label="Default select example" required>
                                        <option selected>Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-danger">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delateModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="deleteSubCategory">
                        <div class="modal-body">
                            @method('DELETE')
                            @csrf
                            <div class="mb-3">
                                <h5>Are you sure you want to delete the category?</h5>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                No
                            </button>
                            <button type="submit" class="btn btn-danger">
                                Yes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table id="sub_category_table" class="display text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>


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