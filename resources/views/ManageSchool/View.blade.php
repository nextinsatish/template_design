@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-regular fa-school text-muted"></i> School View</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item">Schools</li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-primary border-3">
                        <div class="card-header">
                            <p class="m-0 float-start text-dark" style="font-size: 20px;">Next Innovation School -NEMS0002</p>
                            <div class="float-end">

                                <button type="button" class="btn px-1"><i class="fas fa-edit text-primary"></i></button>
                                <button type="button" class="btn px-1" title="remove"><i
                                        class="fas fa-key text-info"></i></button>
                                <button type="button" class="btn px-1 fadeout" title="remove"><i
                                        class="fas fa-times text-warning"></i></button>
                                <button type="button" class="btn px-1" title="remove"><i
                                        class="fas fa-trash text-danger"></i></button>
                                <button type="button" class="btn px-1" onclick="window.history.back(-1);" title="remove"><i
                                        class="fas fa-arrow-alt-circle-left text-secondary"></i></button>


                                {{-- <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a> --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-md-12 col-lg-8 col-xl-8 col-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <div class="text-center card bg-light shadow-sm">
                                                <div class="card-subtitle text-muted mt-2">Total Student</div>
                                                <div class="card-title py-2 text-muted">559</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="text-center card bg-light shadow-sm">
                                                <div class="card-subtitle text-muted mt-2">Total Staff</div>
                                                <div class="card-title py-2 p-0 text-muted">61</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="text-center  card bg-light shadow-sm">
                                                <div class="card-subtitle text-muted mt-2">Estimated project duration</div>
                                                <div class="card-title py-2 p-0 text-muted">20</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                            <div class="card shadow-md border-top border-2 border-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title p-0">Basic Details</h3>
                                                </div>

                                                <div class="card-body">
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-map-marker-alt me-1"></i>Address</strong>
                                                        <p class="text-muted">Nandavan-3 Rajkot</p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-regular fa-mobile me-1"></i>Mobile
                                                            No.</strong>
                                                        <p><a href="2023578945"class="text-muted">+91 8160040923</a></p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-at me-1"></i>Email ID</strong>
                                                        <p><a
                                                                href="thekotaculture21@gmail.com"class="text-muted">thekotaculture21@gmail.com</a>
                                                        </p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- ==============end first card======= --}}
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                            <div class="card shadow-sm border-top border-2 border-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title p-0">Session And Timezone Details</h3>
                                                </div>

                                                <div class="card-body">
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-layer-group me-1"></i>Current
                                                            Session</strong>
                                                        <p class="text-muted">2022-2023</p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-calendar-week me-1"></i>Session Start
                                                            Month</strong>
                                                        <p>June</p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="far fa-calendar-check me-1"></i>Date Time
                                                            Format</strong>
                                                        <p>dd-mm-yyyy (01-01-1970)</p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <strong><i class="fas fa-at me-1"></i>Timezone</strong>
                                                        <p>(GMT+05:30) Asia, Kolkata</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ============end second card== --}}
                                    </div>
                                </div>
                                {{-- ===================================================================== --}}
                                <div class="com-md-12 col-lg-4 col-xl-4 col-12">
                                    <div class="row">
                                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> School Description</h3>
                                        <p class="text-muted">
                                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam earum libero
                                            qui
                                            enim minus a, fugit quis totam molestiae modi. Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Nam, harum eaque.
                                        </p>
                                        <br>
                                        <div class="text-muted mt-2">
                                            <p><small>Contact Person<b class="d-block">Hirenbhai Kathiriya</b></small></p>
                                                <p><small>Designation<b class="d-block">-</b></small></p>
                                            
                                        </div>
                                        <h5 class="mt-5 text-muted">School Documents</h5>
                                        <ul style="list-style-type:none">
                                            <li><a href="#" class="btn btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>Functional-requirements.docx</a></li>
                                            <li><a href="#" class="btn btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                                utd.pdf
                                            </a></li>
                                            <li><a href="#" class="btn btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                                            Email-from-flatbal.mln
                                        </a></li>
                                        <li><a href="#" class="btn btn-link text-secondary"><i class="far fa-fw fa-image"></i>
                                                Logo.png
                                                </a></li>
                                                <li><a href="#" class="btn btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                                Contract-10_12_2014.docx
                                                    </a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('css')
    <style>
        #create_school_form label {
            font-weight: bold;
        }
        ul li a{
            padding:0px 12px !important;
        }
    </style>
@endsection
@section('script')
<script>
    $("body").delegate('.fadeout',"click",function(){
        $("section").slideToggle(700);
    });
</script>
@endsection
