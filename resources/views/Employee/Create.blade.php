@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-user-plus text-muted me-2"></i>Employee Create</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">HR</li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item">Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-primary border-3">
                        <div class="card-header p-3">
                            <p class="m-0 float-start">Employee Details</p>
                            <div class="float-end">
                                <a href="/Employee/index">
                                    <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                                </a>
                                
                            
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Note: if you do not have data of mandatory filed, please add "-"</h5>

                           
                            <form class="animate__animated animate__fadeInLet" style="animation-duration: 1.5s;">
                                <div class="row g-2">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="firstname" class="form-label">First Name&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="Enter First Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="father_name" class="form-label">Father/Husband Name&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="father_name" name="father_name"
                                            placeholder="Enter Father Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="lastname" class="form-label">Last Name&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Enter Last Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="mother_name" class="form-label">Mother Name</label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                                            placeholder="Enter Mother Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="mobile" class="form-label">Mobile&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="mobile" name="mobile"
                                            placeholder="Enter Mobile No.">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="emailid" class="form-label">Email ID&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="emailid" name="emailid"
                                            placeholder="Enter Email ID">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="gender" class="form-label">Gender&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="emergency_contact" class="form-label">Emergency Contact No.&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="emergency_contact" name="emergency_contact"
                                            placeholder="Enter Emergency Contact No.">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="blood_group" class="form-label">Blood Group&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="blood_group" name="blood_group" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">A-</option>
                                            <option value="2">A+</option>
                                            <option value="3">B-</option>
                                            <option value="3">B+</option>
                                            <option value="4">O-</option>
                                            <option value="5">O+</option>
                                            <option value="6">AB-</option>
                                            <option value="7">AB+</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="marital_status" class="form-label">Marital Status&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="Married">Married</option>
                                            <option value="Unmarried">Unmarried</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Seperated">Seperated</option>
                                            <option value="Engaged">Engaged</option>
                                            <option value="Not Specified">Not Specified</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="reporting_to" class="form-label">Reporting To</label>
                                        <select class="form-select" id="reporting_to" name="reporting_to" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="Akshay Maheta">Akshay Maheta</option>
                                            <option value="Abhay Shah">Abhay Shah</option>
                                            <option value="Arjun Zundala">Arjun Zundala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1 sm-0 g-2">
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="qualification" class="form-label">Qualification&nbsp;<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification" id="" rows="2"
                                                style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="work_experience" class="form-label">Work Experience&nbsp;<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="work_experience" name="work_experience" placeholder="Enter Work Experience" id="" rows="2"
                                                style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 g-2">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="department" class="form-label">Department&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="department" name="department"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="Board of Director">Board of Director</option>
                                            <option value="Development">Development</option>
                                            <option value="Graphics Design">Graphics Design</option>
                                            <option value="HR & Admin">HR & Admin</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Quality Analysis (QA)">Quality Analysis (QA)</option>
                                            <option value="Technical & Support">Technical & Support</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="designation" class="form-label">Designation&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="designation" name="designation"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="Director">Director</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="block_level" class="form-label">Block Level&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="block_level" name="block_level"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="Block Level 1">Block Level 1</option>
                                            <option value="Block Level 2">Block Level 2</option>
                                            <option value="Block Level 3">Block Level 3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <label for="headquarter" class="form-label">Headquarter&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="headquarter" name="headquarter"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="row mt-1 mb-3 sm-0 g-2">
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="current_address" class="form-label">Current Address&nbsp;<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" placeholder="Enter Current Address" name="current_address" id="current_address" rows="2"
                                                style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="permenent_address" class="form-label">Permenent Address&nbsp;<span
                                                    class="text-danger">*</span></label>
                                            
                                            <textarea class="form-control" placeholder="Enter Permenent Address" name="permenent_address" id="permenent_address" rows="2"
                                                style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                
                                    <div class="col-12">
                                        <div class="accordion card shadow-none"  id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Other Details
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body p-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card shadow">
                                                                    <div class="card-header" style="background-color: antiquewhite !important;">
                                                                        <p class="m-0 text-dark">Payroll</p>
                                                                    </div>
                                                                    <div class="card-body p-4">
                                                                       <div class="row">
                                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <label for="epf_no" class="form-label">EPF No</label>
                                                                            <input type="text" class="form-control" id="epf_no" name="epf_no">
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <label for="basic_salary" class="form-label">Basic Salary
                                                                            </label>
                                                                            <input type="text" class="form-control" name="basic_salary" id="basic_salary">
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <label for="contract_type" class="form-label">Contract Type
                                                                            </label>
                                                                            <select class="form-select" id="contract_type" name="contract_type" aria-label="Default select example">
                                                                                <option selected>Select</option>
                                                                                <option value="1">Permanent</option>
                                                                                <option value="1">Probation</option>
                                                                               
                                                                            </select>
                                                                        </div>

                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="card shadow">
                                                                    <div class="card-header" style="background-color: lavender !important;"><p class="m-0 text-dark">Bank Account Details</p>
                                                                    </div>
                                                                    <div class="card-body p-4">
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                                <label for="account_title" class="form-label">Account Title</label>
                                                                                <input type="text" class="form-control" id="account_title" name="account_title">
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                                <label for="bank_account_no" class="form-label">Bank Account Number</label>
                                                                                <input type="text" class="form-control" id="bank_account_no" name="bank_account_no">
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                                <label for="bank_name" class="form-label">Bank Name</label>
                                                                                <input type="text" class="form-control" id="bank_name" name="bank_name">
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                                <label for="ifsc_code" class="form-label">IFSC Code</label>
                                                                                <input type="text" class="form-control" id="ifsc_code" name="ifsc_code">
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                                <label for="branch_name" class="form-label">Bank Branch Name</label>
                                                                                <input type="text" class="form-control" id="branch_name" name="branch_name">
                                                                            </div>
                                                                            
                                                                        
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                <div class="">
                                    <button type="submit" class="btn btn-success">Submit</button>
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
        body {
            font-family: sarif;
        }

        form label {
            font-weight: bold;

        }
    </style>
@endsection
