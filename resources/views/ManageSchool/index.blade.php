@extends('Layout.mainLayout')
@push('title')
    <title>Schools</title>
@endpush
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fs-3">Schools</h1>
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

                            <a href="/ManageSchool/Create" class="btn btn-primary btn-sm m-0 ms-auto"><i
                                    class="fa fa fa-plus text-white"></i> Create school
                            </a>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" accept-charset="UTF-8" id="School-Search-Form">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="keyword" class="text-secondary fw-bold">Search By Employee
                                                Name/Code/Mobile/Email</label>
                                            <input placeholder="Enter Employee Name/Code/Mobile/Email" class="form-control"
                                                id="keyword" name="keyword" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-2 px-0">
                                        <button class="btn btn-success mt-4" type="submit">
                                            <i class="fas fa-search"></i> Search
                                        </button>
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
                        <div class="card-body mt-2" style="overflow:auto !important;">

                            {{-- <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable</p> --}}

                            <!-- Table with stripped rows -->
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th scope="col" width="1%">Logo</th>
                                        <th scope="col">School Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email ID</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col" width="12%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample" --}}
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
        tr[aria-expanded=true] .fa-chevron-right {

            display: none;
        }

        tr[aria-expanded=false] .fa-chevron-down {
            display: none;
        }

            

        /* .con{
                    
                    transition-timing-function: ease-in-out;
                    transition-duration: 800ms;

                } */
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable({

        });
            // $("tr.hideme").css({"display" : "none"});
            // $("tr").append('<tr><td>as</td><td>as</td><td>as</td><td>as</td><td>as</td><td>as</td><td>as</td><td>as</td></tr>');
            // let table=new DataTable('#datatable');    

        });
        // $("body").delegate("tr[aria-expanded=false]", "click", function () {
        //     alert("1");
        // });
    </script>
@endsection
