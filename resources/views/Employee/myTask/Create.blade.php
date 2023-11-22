@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle mb-sm-0">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h1><i class="fas fa-tasks me-2"></i> Create Tasks</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item">myTask</li>
                            <li class="breadcrumb-item">Create</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="/Employee/myTask/index" class="btn btn-sm btn-primary">
                        Back
                    </a>
                </div>

            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top border-primary border-3">
                        <div class="card-header p-3">
                            <p class="m-0">Add Task Details</p>

                        </div>
                        <div class="card-body">
                            <form class="animate__animated animate__fadeInLet" style="animation-duration: 1.5s;">
                                <div class="row g-2">
                                    <div class="col-md-12 mt-3">
                                        <label for="task_title" class="form-label">Write a task name &nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="task_title" name="task_title"
                                            placeholder="Write a task name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                        <label for="assignee" class="form-label">Assignee&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <select name="assignee" id="assignee" class="form-select">
                                            <option value="Abhay Shah">Abhay Shah</option>
                                            <option value="Akshay Maheta">Akshay Maheta</option>
                                            <option value="Arjun Zundala">Arjun Zundala</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                        <label for="due_date" class="form-label">Due Date&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="due_date" name="due_date">
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                        <label for="projects" class="form-label">Projects&nbsp<span
                                                class="text-danger">*</span></label>
                                        <select name="projects" id="projects" class="form-select">
                                            <option value="Nems">Nems</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <label for="description" class="form-label">Description&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            placeholder="Description">
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                                        <label for="attach_document">Attach Document</label>
                                        <input type="file" name="attach_document" class="form-control"
                                            id="attach_document">
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                        <label for="mark_as_done">Mark as Done?</label>
                                        <select name="mark_as_done" id="mark_as_done" class="form-select">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <label for="notes" class="form-label">What is this task about?&nbsp;<span
                                                class="text-danger">*</span></label>
                                        <textarea name="notes" id="notes" row="3" class="form-control" style="resize:none;" placeholder="Please enter task details..."></textarea>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-success">Add Task</button>
                                    </div>
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

    </style>
@endsection
@section('script')
    <script>
        $("#assignee").select2({
            placeholder: "Select Options",
        });
        $("#projects").select2({
            placeholder: "Select Options",
        })
    </script>
@endsection
