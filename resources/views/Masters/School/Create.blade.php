@extends('layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-plus text-muted me-2"></i>School Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Masters/School/index">School</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="upload_excel" class="form-label mb-0">Upload Excel</label>
                                        <input type="file" class="form-control" name="upload_excel">
                                    </div>
                                    <div class="col-md-6 px-0">
                                        <input type="submit" value="Upload" class="btn btn-outline-success mt-4">
                                    </div>
                                </div>
                            </form>

                            {{-- =========================================================== --}}
                            <form action="3" class="row g-3 mt-1" method="post">
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
                                    <label for="emailID" class="form-label">School Email ID</label>
                                    <input type="email" class="form-control" placeholder="Enter School Email ID"
                                        name="emailID">
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
                                        <option value="" selected>Select</option>
                                        <option value="">Gondal</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('script')
<script>
    $('#state_id,#city_id,#headquarter_id,#area_id').select2({
        placeholder: "Select Options",
    });
    
</script>
@endsection
