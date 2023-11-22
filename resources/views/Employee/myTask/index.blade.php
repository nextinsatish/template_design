@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <div class="d-sm-flex justify-content-sm-between">
                <div>
                    <h1><i class="fas fa-tasks me-1"></i>My Tasks</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">myTask</li>

                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="/Employee/myTask/Create" class="btn btn-primary btn-sm m-0 ms-auto">Add task
                    </a>
                </div>
            </div>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-3 border-primary">
                        <div class="card-header d-flex">
                            <h3 class="card-title p-0">Task List</h3>



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
                                        <th scope="col">Task Id</th>
                                        <th scope="col" width="25%">Title</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Asigned To</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>qwert</td>
                                        <td>Test 1 Testing Task</td>
                                        <td><span class="badge text-dark" style="background-color: orange">Assigned</span></td>
                                        <td>Arjun Zundala</td>
                                        <td></td>
                                        <td>19-05-2023</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>
                                            <span>
                                                <a href="/Employee/myTask/Edit" class="text-primary"><i
                                                        class="fa fa-edit fa-md"></i></a>

                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>qwert</td>
                                        <td>Smile Tution Hub Data Entry & Installation</td>
                                        <td><span class="badge text-dark" style="background-color: #008080;">QA Passed</span></td>
                                        <td>Arjun Zundala</td>
                                        <td></td>
                                        <td>19-05-2023</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>
                                            <span>
                                                <a href="/Employee/myTask/Edit" class="text-primary"><i
                                                        class="fa fa-edit fa-md"></i></a>

                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>a1itb5</td>
                                        <td>Generate Dynamic PO Format in Website Portal</td>
                                        <td><span class="badge text-dark" style="background-color:green;">100% Done</span></td>
                                        <td>Arjun Zundala</td>
                                        <td>Akshay Maheta</td>
                                        <td>20-05-2023</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>15-05-2023 23:30 PM</td>
                                        <td>
                                            <span>
                                                <a href="/Employee/myTask/Edit" class="text-primary"><i
                                                        class="fa fa-edit fa-md"></i></a>

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

       
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            let table = new DataTable('.datatable');
        });
    </script>
@endsection
