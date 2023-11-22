@extends('layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-eye text-muted me-2"></i>View School</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/Masters/School/index">Schools</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow rounded-2 border-top border-info border-3">
                        <div class="card-heading rounded-top-2 p-3" style="border-bottom: 1px solid #ebeef4;;">
                            <p class="m-0 float-start" style="font-size:18px;">Arjun International School Details</p>
                            <div class="float-end">
                                <a href="/Masters/School/index">
                                    <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                                </a>

                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-8">No Visit Found...</div>
                                <div class="col-lg-4 p-0">
                                    <div class="card shadow" style="background:rgba(0,0,0,.03);">
                                        <div class="position-relative" style="margin-bottom: -7px !important;">
                                            <div class="main text-white pt-3 text-center"
                                                style="height:140px;background:#17a2b8 !important;border-radius:5px 5px 0px 0px;">
                                                <h5>Arjun International School</h5>
                                                <h6 class="widget-user-desc">NEMS0001</h6>
                                            </div>
                                            <div class="sub mt-sm-2">
                                                <img src="{{ asset('assets/img/school_logo.png') }}" alt="School logo"
                                                    class="img-circle position-absolute"
                                                    style="left:40%;top:55%;border:2px solid white;">
                                            </div>
                                        </div>
                                        <div class="card-footer " style="border-radius: 0px 0px 10px 10px;">
                                            <div class="row text-center">
                                                <div class="col-sm-4 border-end">
                                                    <h5 class="card-title pb-0">50</h5>
                                                    <span class="card-subtitle">STUDENTS</span>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <h5 class="card-title pb-0">1000</h5>
                                                    <span class="card-subtitle">STAFF</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h5 class="card-title pb-0">2</h5>
                                                    <span class="card-subtitle">BRANCHES</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-6 border-end">
                                                    <h6 class="text-info">Contact Person Name</h6>
                                                    <span>manvar</span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6 style="font-weight: 400;">1020304050</h6>
                                                    <h6 style="font-weight: 400;">Arjunzundal@gmail.com</h6>
                                                </div>
                                            </div>
                                            <hr class="mt-1">
                                            
                                            <div class="row text-center">
                                                <div class="col-sm-6 border-end">
                                                    <h6 class="text-info">Is Having Website?</h6>
                                                    <span>No</span>
                                                </div>
                                                <div class="col-sm-6 ">
                                                    <h6 class="text-info">Is Having Software?</h6>
                                                    <span>No</span>
                                                </div>
                                            </div>
                                            <hr class="mt-1">
                                            <div class="col-sm-12">
                                                <h6 class="text-info">Address</h6>
                                                <span>13 Uday Nagar, Bh.indraprasth Hall, Near Mavdi Chowkadi,Mavdi Main Road, Rajkot - 360 004.</span>
                                            </div>
                                            <hr class="mt-1">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <h6 class="text-info">Latitude</h6>
                                                    <span>71.2121</span>
                                                </div>
                                                <div class="col-sm-4 text-center border-end">
                                                    <h6 class="text-info">Longitude</h6>
                                                    <span>21.2121</span>
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <h1>
                                                        <a href="#" class="text-primary"><i class="fas fa-location-arrow fa-lg"></i></a>
                                                    </h1>
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
        </section>

    </main>
@endsection
@section('css')
    <style>
        /* .card-widget {
                                                border: 0px;
                                                position: relative;
                                            }

                                            ..widget-user .widget-user-header {
                                                border-top-left-radius: 0.25rem;
                                                border-top-right-radius: 0.25rem;
                                                height: 135px;
                                                padding: 1rem;
                                                text-align: center;
                                            }

                                            .widget-user .widget-user-image {
                                                position: absolute;
                                                left: 50%;
                                                top: 75px;
                                                margin-left: -45%;
                                            }*/

        .img-circle {
            border-radius: 50%;
            width: 90px;
            height: 90px;
            ;
            border: 3px solid white;
        }

        /* .elevation-2 {
                                                box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23) !important;
                                            } */
    </style>
@endsection
