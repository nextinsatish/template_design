@extends('Layout.mainLayout')
@push('title')
    <title>State</title>
@endpush
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><i class="fas fa-solid fa-city fs-4 me-2"></i>State Master
            </h1>
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
                            <h3 class="card-title p-0">State List</h3>

                            <a href="#" class="btn btn-primary btn-sm m-0 ms-auto" data-bs-toggle="modal"
                                data-bs-target="#createState"><i class="fa fa fa-plus text-white me-1"></i> Create
                                State
                            </a>
                        </div>
                        <div class="card-body mt-4" style="overflow: auto !important;">
                            <table class="table table-bordered tetx-center" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th scope="col">PID</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>63e5475f2ccfe379429edff7</td>
                                        <td>Andaman and Nicobar Islands</td>
                                        <td class="text-center">
                                            <span>
                                                <a href="/Masters/State/View" class="me-1">
                                                    <i class="fas fa-eye text-info"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editState"  class="me-1">
                                                    <i class="fas fa-edit text-warning"></i>
                                                </a>
                                                <a href="/Masters/State/Delete" class="me-1">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>63e5475f2ccfe379429edff7</td>
                                        <td>Andaman and Nicobar Islands</td>
                                        <td class="text-center">
                                            <span>
                                                <a href="/Masters/State/View" class="me-1">
                                                    <i class="fas fa-eye text-info"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editState"  class="me-1">
                                                    <i class="fas fa-edit text-warning"></i>
                                                </a>
                                                <a href="/Masters/State/Delete" class="me-1">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>63e5475f2ccfe379429edff7</td>
                                        <td>Andaman and Nicobar Islands</td>
                                        <td class="text-center">
                                            <span>
                                                <a href="/Masters/State/View" class="me-1">
                                                    <i class="fas fa-eye text-info"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editState"  class="me-1">
                                                    <i class="fas fa-edit text-warning"></i>
                                                </a>
                                                <a href="/Masters/State/Delete" class="me-1">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>
    @include('Masters.State.Create')
    @include('Masters.State.Update')
@endsection
@section('css')
    <style>
        form label {
            font-weight: bold;
        }
        table tr th{
        text-align: center !important;
    }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable({

            });
        });
    </script>
@endsection
