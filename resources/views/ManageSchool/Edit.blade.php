@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-edit text-muted"></i> School Manage</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                <li class="breadcrumb-item">Schools</li>
                <li class="breadcrumb-item active">Manage</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-primary border-3">
                        <div class="card-header p-3">
                            <p class="m-0 float-start">School Details</p>
                            <div class="float-end">
                                <a href="/ManageSchool/index">
                                    <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                                </a>


                            </div>
                        </div>
                        <div class="card-body">

                            <form class="animate__animated animate__fadeInLete" style="animation-duration: 1.5s;" id="create_school_form">
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-6 mb-2">
                                        <label for="school_name" class="form-label">School Name</label>
                                        <input type="text" class="form-control" id="school_name" name="school_name"
                                            placeholder="Enter School Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <label for="first_name" class="form-label">Firstname</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            placeholder="Enter Firstname">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <label for="lastname" class="form-label">LastName</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Enter LastName">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <label for="scholl_mobile" class="form-label">School Mobile</label>
                                        <input type="number" class="form-control" id="scholl_mobile" name="scholl_mobile"
                                            placeholder="Enter School Mobile">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <label for="school_emailid" class="form-label">School Email ID</label>
                                        <input type="email" class="form-control" id="school_emailid" name="school_emailid"
                                            placeholder="Enter School Email ID">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-6 mb-2">
                                        <label for="line1" class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" id="line1" name="line1"
                                            placeholder="Enter Address Line 1">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-6 mb-2">
                                        <label for="line2" class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" id="line2" name="line2"
                                            placeholder="Enter Address Line 2">
                                    </div>

                                    
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">
                                        <label for="state_id" class="form-label">Select State</label>
                                        <select class="form-select" id="state_id" name="state_id" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Gujarat</option>
                                            <option value="2">Andhra Pradesh</option>
                                            <option value="3">Assam</option>
                                            <option value="3">Bihar</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                                        <label for="city_id" class="form-label">Select City</label>
                                        <select class="form-select" id="city_id" name="city_id" aria-label="Default select example">
                                            <option selected>Select</option>
                                        </select>
                                    </div>
                                   
                                  
                                </div>
                               <div class="">
                                    <button type="submit" class="btn btn-info shadow-sm text-white">Save</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('css')
<style>
   #create_school_form label{
        font-weight: bold;
        color: #5b5b60;
        
    }
</style>
@endsection

