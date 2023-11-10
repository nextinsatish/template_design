@extends('Layout.mainLayout')
@push('title')
    <title>Schools</title>
@endpush
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-school fa-reguler fs-3 me-2"></i>School Master</h1>
            {{-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Employeee</li>
                    
                </ol>
            </nav> --}}
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-3 border-primary">
                        <div class="card-header d-flex">
                            <h3 class="card-title p-0">Search School</h3>

                            <a href="/Masters/School/Create" class="btn btn-primary btn-sm m-0 ms-auto"><i
                                    class="fa fa fa-plus text-white"></i> Create school
                            </a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" accept-charset="UTF-8" id="School-Search-Form">
                                <div class="row mt-2">
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="school_code" class="form-label">School Code</label>
                                        <input type="text" class="form-control" id="school_code" name="school_code"
                                            placeholder="Enter School Code">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="school_name" class="form-label">School Name</label>
                                        <input type="text" class="form-control" id="school_name" name="school_name"
                                            placeholder="Enter School Name">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="school_mobile" class="form-label">School Mobile</label>
                                        <input type="text" class="form-control" id="school_mobile" name="school_mobile"
                                            placeholder="Enter School Mobile">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status">
                                            <option value="All">All</option>
                                            <option value="Active">Active</option>
                                            <option value="Dective">Dective</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="show_deleted" class="form-label">Show Deleted</label>
                                        <select class="form-select" id="show_deleted" name="show_deleted">
                                            <option value="All">All</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="state_id" class="form-label">Select State</label>
                                        <select class="form-select multiple" id="state_id" name="state_id[]"
                                            data-placeholder="Select Option" multiple="multiple">
                                            {{-- <option value="select_option">Select Options</option> --}}
                                            <option value="1">Gujarat</option>
                                            <option value="2">Assam</option>
                                            <option value="3">Bihar</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6">
                                        <label for="city_id" class="form-label">Select City</label>
                                        <select class="form-select multiple" id="city_id" name="city_id[]" multiple="multiple">
                                            <option value="select_option">Select Options</option>
                                            <option value="1">Rajkot</option>
                                            <option value="2">Morabi</option>
                                            <option value="3">junaghadh</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <input type="submit" class="btn btn-primary" value="Search">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">

                    <div class="card border-top border-3 border-primary">
                        <div class="card-header">
                            <h5 class="p-0 text-dark">School List</h5>
                        </div>
                        <div class="card-body mt-2">
\                           
                            <table class="table table-bordered tetx-center datatable" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th scope="col">School Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email ID</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col" width="12%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NEMS0001</td>
                                        <td>Arjun Zundala</td>
                                        <td>2030605040</td>
                                        <td>abc@gmail.com</td>
                                        <td>16-02-2023</td>
                                        <td>
                                            <span>
                                                <a href="/ManageSchool/View" class="btn btn-sm btn-info text-white">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <a href="/ManageSchool/Edit" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> Manage
                                                </a>
                                                {{-- <i class="fa fa-chevron-right"></i>
                                                <i class="fa fa-chevron-down"></i> --}}
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>
                                                <img src="{{ asset('assets/img/profile-img.jpg') }}"
                                                    class="img img-fluid rounded-5 ">
                                            </span>
                                        </td>
                                        <td>NEMS0001</td>
                                        <td>Arjun Zundala</td>
                                        <td>2030605040</td>
                                        <td>abc@gmail.com</td>
                                        <td>16-02-2023</td>
                                        <td>
                                            <span>
                                                <a href="/ManageSchool/View" class="btn btn-sm btn-info text-white">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <a href="/ManageSchool/Edit" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> Manage
                                                </a>
                                                {{-- <i class="fa fa-chevron-right"></i>
                                                <i class="fa fa-chevron-down"></i> --}}
                                            </span>
                                        </td>

                                    </tr>

                                    {{-- <tr>
                                        <td>NEMS</td>
                                        <td >NEMS</td>
                                        <td >NEMS</td>
                                        <td >NEMS</td>
                                        <td  class="p-2 text-center" style="padding:0.5rem!important;">
                                            <a href="#" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Manage
                                            </a>
                                        </td>

                                        <td >NEMS</td>
                                        <td >NEMS</td>
                                        <td >NEMS</td>
                                    </tr> --}}







                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>





        </section>

    </main><!-- End #main -->
@endsection
@section('css')
    <style>
        form label {
            color: #5b5b60;
            font-weight: bold;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.datatable').dataTable({});
        });
        // $('#state_id').select2({
        //     theme: "bootstrap-5",
          
        //     closeOnSelect: false,
        //     tags: true
        // });
        $(".multiple").select2({
            placeholder: "Select Options"
        });
    </script>
@endsection
