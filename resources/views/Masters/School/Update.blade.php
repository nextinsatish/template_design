@extends('layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-edit text-muted me-2"></i> School Manage</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Masters/School/index">School</a></li>
                    <li class="breadcrumb-item active">Manage</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow rounded-2">
                        <div class="card-heading rounded-top-2 p-3" style="border-bottom: 1px solid #ebeef4;;">
                            <p class="m-0 float-start" style="font-size:18px;">School Details</p>
                            <div class="float-end">
                                <a href="/Masters/School/index">
                                    <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                                </a>

                            </div>
                        </div>
                        <div class="card-body p-4">

                            {{-- =========================================================== --}}
                            <form action="3" class="row g-3" method="post">
                                <div class="col-md-6 mb-2">
                                    <label for="school_name" class="form-label">School Name <sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" placeholder="Enter School Name"
                                        name="school_name">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name"
                                        name="first_name">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name"
                                        name="last_name">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="mobile" class="form-label">School Mobile</label>
                                    <input type="text" class="form-control" placeholder="Enter School Mobile"
                                        name="mobile">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="alt_mobile" class="form-label">Alternate Mobile</label>
                                    <input type="text" class="form-control" placeholder="Enter School Mobile"
                                        name="alt_mobile">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="emailID" class="form-label">School Email ID</label>
                                    <input type="email" class="form-control" placeholder="Enter School Email ID"
                                        name="emailID">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="number_of_students" class="form-label">Total Students</label>
                                    <input type="text" class="form-control" placeholder="Enter Number of Students"
                                        name="number_of_students">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="number_of_teachers" class="form-label">Total Staff</label>
                                    <input type="text" class="form-control" placeholder="Enter Number of Teachers"
                                        name="number_of_teachers">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="number_of_branches" class="form-label">Total Branches</label>
                                    <input type="text" class="form-control" placeholder="Enter Number of Branches"
                                        name="number_of_branches">
                                </div>

                                <div class="col-md-3 mb-2">
                                    <label for="latitude" class="form-label">Latitude<sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" placeholder="Enter Latitude" name="latitude">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="longitude" class="form-label">Longitude<sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" placeholder="Enter Longitude"
                                        name="longitude">
                                </div>

                                <div class="row g-3">
                                <div class="col-md-3 mb-2">
                                    <label for="is_having_website">Is having website?</label>
                                    <select name="is_having_website" id="is_having_website" class="form-select">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3 is_having_website mb-2" style="display: none">
                                    <label for="is_having_website">Website Link</label>
                                    <input type="url" class="form-control" placeholder="Enter Website">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="is_having_other_software">Is having other software?</label>
                                    <select name="is_having_other_software" id="is_having_other_software"
                                        class="form-select">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2 is_having_other_software" style="display: none">
                                    <label for="is_having_other_software">Software Name</label>
                                    <input type="text" placeholder="Enter Website" class="form-control">
                                </div>
                            </div>


                                <div class="col-md-6 mb-2">
                                    <label for="line1" class="form-label">Address Line 1<sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" placeholder="Enter Address Line 1"
                                        name="line1">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="line2" class="form-label">Address Line 2<sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" placeholder="Enter Address Line 2"
                                        name="line2">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="state_id" class="form-label">Select State<sup
                                            class="text-danger">*</sup></label>
                                    <select id="state_id" name="state_id" class="form-select">
                                        <option value="">Select state</option>
                                        <option value="AN">Andaman and Nicobar Islands</option>
                                        <option value="AP">Andhra Pradesh</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="city_id" class="form-label">Select City<sup
                                            class="text-danger">*</sup></label>
                                    <select id="city_id" name="city_id" class="form-select">
                                        <option value="" selected>Select</option>
                                        <option value="Abrama">Abrama</option>
                                        <option value="Adalaj">Adalaj</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="headquarter_id" class="form-label">Select Headquarter<sup
                                            class="text-danger">*</sup></label>
                                    <select name="headquarter_id" id="headquarter_id" class="form-select">
                                        <option value="" selected>Select</option>
                                        <option value="">Ahmedabad 1</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="area_id" class="form-label">Select Area<sup
                                            class="text-danger">*</sup></label>
                                    <select name="area_id" id="area_id" class="form-select">
                                        <option value="1">Select</option>
                                        <option value="Gondal">Gondal</option>
                                        <option value="Virpur">Virpur</option>
                                        <option value="lodhika">lodhika</option>
                                        <option value="anandpar">anandpar</option>
                                        <option value="amreli">amreli</option>
                                        <option value="junagadh">junagadh</option>
                                        <option value="rajkot">rajkot</option>
                                        <option value="ko.saghani">ko.saghani</option>
                                        <option value="ribda">ribda</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md">Update</button>
                                </div>
                            </form>
                        </div>
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
    </style>
@endsection
@section('script')
    <script>
        $("#state_id,#city_id,#area_id,#headquarter_id").select2({
            placeholder: "Select Options",
        });


        is_having_website_fun($("#is_having_website").val());

        function is_having_website_fun(param) {
            if (param == "Yes") {
                $(".is_having_website").show('slow/400');
            } else {
                $(".is_having_website").hide('slow/400');
            }
        }

        $("#is_having_website").change(function() {
            is_having_website_fun($(this).val());
        });
        // ==============================================================//
        is_having_other_software_fun($("#is_having_other_software").val());

        function is_having_other_software_fun(param) {
            if (param == "Yes") {
                $(".is_having_other_software").show('slow/400');
            } else {
                $(".is_having_other_software").hide('slow/400');
            }
        }
        $("#is_having_other_software").change(function() {
            is_having_other_software_fun($(this).val());
        });
    </script>
@endsection
