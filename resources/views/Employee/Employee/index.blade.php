@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fa-solid fa-user me-1"></i>Employee</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                    <li class="breadcrumb-item">HR</li>
                    <li class="breadcrumb-item active">Employeee</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-3 border-primary">
                        <div class="card-header d-flex">
                            <h3 class="card-title p-0">Search Employee</h3>

                            <a href="/Employee/Employee/Create" class="btn btn-primary btn-sm m-0 ms-auto"><i
                                    class="fa fa fa-plus text-white"></i> Create Employee
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
                            <h5 class="p-0">Employee List</h5>
                        </div>
                        <div class="card-body mt-2" style="overflow: auto !important;">

                            {{-- <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable</p> --}}

                            <!-- Table with stripped rows -->
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr#</th>
                                        <th scope="col">Employee Code</th>
                                        <th scope="col">Employee Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email ID</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>NEXTIN001</td>
                                        <td>ARJUN ZUNDALA</td>
                                        <td>1010202345</td>
                                        <td>abc@yopmail.com</td>
                                        <td>
                                            <span>
                                                <a href="#" class="text-info"><i
                                                        class="fa-solid fa-eye fa-sm"></i></a>
                                                <a href="/Employee/Employee/Update" class="text-warning"><i
                                                        class="fa-solid fa-pen-to-square fa-sm"></i></i></a>
                                                <a href="#" class="text-danger"><i
                                                        class="fa-solid fa-trash fa-sm"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>NEXTIN002</td>
                                        <td>PRANAV TANK</td>
                                        <td>1010202345</td>
                                        <td>abc@yopmail.com</td>
                                        <td>
                                            <span>
                                                <a href="#" class="text-info"><i
                                                        class="fa-solid fa-eye fa-sm"></i></a>
                                                <a href="/Employee/Employee/Update" class="text-warning"><i
                                                        class="fa-solid fa-pen-to-square fa-sm"></i></i></a>
                                                <a href="#" class="text-danger"><i
                                                        class="fa-solid fa-trash fa-sm"></i></a>
                                            </span>
                                        </td>
                                    </tr>


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
        .datatable thead th {
            text-align: center !important;
        }

        .datatable tbody tr td:nth-child(6) {
            text-align: center !important;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            let table = new DataTable('.datatable');
        });
    </script>
@endsection
