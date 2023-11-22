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
                <div class="col-lg-12 col">
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
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="school_code" class="form-label mb-1">School Code</label>
                                        <input type="text" class="form-control" id="school_code" name="school_code"
                                            placeholder="Enter School Code">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="school_name" class="form-label mb-1">School Name</label>
                                        <input type="text" class="form-control" id="school_name" name="school_name"
                                            placeholder="Enter School Name">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="school_mobile" class="form-label mb-1">School Mobile</label>
                                        <input type="text" class="form-control" id="school_mobile" name="school_mobile"
                                            placeholder="Enter School Mobile">
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="status" class="form-label mb-1">Status</label>
                                        <select class="form-select" id="status" name="status[]" multiple="multiple">
                                            <option value="All">All</option>
                                            <option value="Active">Active</option>
                                            <option value="Dective">Dective</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="show_deleted" class="form-label mb-1">Show Deleted</label>
                                        <select class="form-select" id="show_deleted" name="show_deleted[]"
                                            multiple="multiple">
                                            <option value="All">All</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="state_id" class="form-label mb-1">Select State</label>
                                        <select class="form-select" id="state_id" name="state_id[]" multiple="multiple">
                                            {{-- <option value="select_option">Select Options</option> --}}
                                            <option value="1">Gujarat</option>
                                            <option value="2">Assam</option>
                                            <option value="3">Bihar</option>
                                        </select>

                                    </div>
                                    <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col mb-2 col-12">
                                        <label for="city_id" class="form-label mb-1">Select City</label>
                                        <select class="form-select" id="city_id" name="city_id[]" multiple="multiple">
                                            {{-- <option value="select_option">Select Options</option> --}}
                                            <option value="1">Rajkot</option>
                                            <option value="2">Morabi</option>
                                            <option value="3">jamnagar</option>
                                            <option value="4">junaghadh</option>
                                            <option value="5">mehsana</option>
                                            <option value="6">amreli</option>
                                            <option value="7">vadodara</option>
                                            <option value="8">patan</option>
                                            <option value="9">Ahmedabad</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mt-2 col">
                                        <input type="submit" class="btn btn-primary" value="Search">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">

                <div class="card border-top border-3 border-primary">
                    <div class="card-header py-2">
                        <h5 class="text-dark">School List</h5>
                    </div>
                    <div class="card-body mt-4" style="overflow:scroll;overflow:auto;">

                        <table class="table table-bordered tetx-center" id="datatable">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th scope="col">School Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email ID</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NEMS0001</td>
                                    <td>Arjun Zundala</td>
                                    <td>2030605040</td>
                                    <td>abc@gmail.com</td>
                                    <td>Active</td>
                                    <td>16-02-2023</td>
                                    <td class="text-center">
                                        <span>
                                            <a href="/Masters/School/View" class="me-1">
                                                <i class="fas fa-eye text-info"></i>
                                            </a>
                                            <a href="/Masters/School/Edit" class="me-1">
                                                <i class="fas fa-edit text-warning"></i>
                                            </a>
                                            <a href="/Masters/School/Delete" class="me-1">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                        </span>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->


                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
@section('css')
    <style>
        form label {
            color: #5b5b60;
            font-weight: bold;
        }

        table tr th {
            text-align: center !important;
        }

        .select2-search__field {
            margin-bottom: 5px !important;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable({

            });
        });
        // $('#state_id').select2({
        //     theme: "bootstrap-5",

        //     closeOnSelect: false,
        //     tags: true
        // });
        $("#state_id,#city_id,#status,#show_deleted").select2({
            placeholder: "Select Options"

        });
    </script>
@endsection
