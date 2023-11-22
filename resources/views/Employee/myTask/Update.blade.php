@extends('Layout.mainLayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle mb-sm-0">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h1><i class="fas fa-tasks me-2"></i>Update Tasks</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item">myTask</li>
                            <li class="breadcrumb-item">Update</li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-lg-7 g-1">
                        <div class="card border-top border-primary border-3">
                            <div class="card-header">
                                <p class="m-0">Update Task Details</p>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" id="update-task-detail" enctype="multipart/form-data">
                                    <div class="row mt-2 gx-3">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <label for="task_title">Write a task name{{ required() }}</label>
                                                <input type="text" class="form-control" name="task_title" id="task_title"
                                                    placeholder="Write a task name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-group">
                                                <label for="assignee_emp_id">Assignee{{ required() }}</label>
                                                <select name="assignee_emp_id" id="assignee_emp_id" class="form-select">
                                                    <option value="Abhay Shah">Abhay Shah</option>
                                                    <option value="Arjun Zundala">Arjun Zundala</option>
                                                    <option value="Pranav Tank">Pranav Tank</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-group">
                                                <label for="due_date">Due Date{{ required() }}</label>
                                                <input type="date" name="due_date" id="due_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-group">
                                                <label for="project_id">Projects{{ required() }}</label>
                                                <select name="project_id" id="project_id" class="form-select">
                                                    <option value="Nems">Nems</option>
                                                    <option value="Paper mate">Paper mate</option>
                                                    <option value="Student App">Student App</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <label for="description">Description{{ required() }}</label>
                                                <input type="text" name="description" id="description"
                                                    placeholder="Description" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="row gx-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="attachment">Attach Document</label>
                                                        <input type="file" id="attachment" name="attachment"
                                                            class="form-control">
                                                        
                                                            <span class="badge bg-success" target="_blank">
                                                                <a href="#" class="text-white">Document
                                                                    :Uploads\Admin\Task\1684237811502-440439557.jpg</a>
                                                            </span>
                                                            <span class="badge bg-danger"
                                                                style="cursor: pointer;right:px;top:-10px;"
                                                                title="Delete">X</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <div class="form-group">
                                                        <label for="tags_id">Tags{{ required() }}</label>
                                                        <select name="tags_id" id="tags_id" class="form-select">
                                                            <option value="QA Passed">QA Passed</option>
                                                            <option value="QA Running">QA Running</option>
                                                            <option value="100% Done">100% Done</option>
                                                            <option value="Development Mode">Development Mode</option>
                                                            <option value="QA To Beta Sync">QA To Beta Sync</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <div class="form-group">
                                                        <label for="task_status">Mark as Done?</label>
                                                        <select name="task_status" id="task_status" class="form-select">
                                                            <option value="No">No</option>
                                                            <option value="Yes" selected>Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- ==================end row div =============== --}}
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <label for="notes">What is this task about?</label>
                                                <textarea name="notes" id="notes" rows="5" class="form-control"
                                                    placeholder="Please enter task details..." style="resize:none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="update-task-btn" value="Update Task"
                                                class="btn btn-info text-light">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="card border-top border-primary border-3">
                            <div class="card-header">
                                <p class="m-0">Add Notes</p>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3 scroll"
                                    style="min-height: 350px;max-height:350px;overflow-y:scroll;scrollbar-width:0px !important;">
                                    <div class="col-md-12">
                                        <h5 class="mt-1 text-muted mt-1">Arjun Zundala
                                            <span style="font-size:14px;">14 Aug, 2023 14:51 PM</span>
                                        </h5>
                                        <small>
                                            <p class="text-justify mb-0">test</p>
                                        </small>
                                        <small>
                                            <p class="text-justify text-info mb-0"><a href="#"
                                                    target="_blank">Document : 1692024667184-301314753.pdf</a></p>
                                        </small>
                                        <hr class="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="mt-1 text-muted mt-1">Arjun Zundala
                                            <span style="font-size:14px;">14 Aug, 2023 14:51 PM</span>
                                        </h5>
                                        <small>
                                            <p class="text-justify mb-0">test</p>
                                        </small>
                                        <small>
                                            <p class="text-justify text-info mb-0"><a href="#"
                                                    target="_blank">Document : 1692024667184-301314753.pdf</a></p>
                                        </small>
                                        <hr class="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="mt-1 text-muted mt-1">Arjun Zundala
                                            <span style="font-size:14px;">14 Aug, 2023 14:51 PM</span>
                                        </h5>
                                        <small>
                                            <p class="text-justify mb-0">test</p>
                                        </small>
                                        <small>
                                            <p class="text-justify text-info mb-0"><a href="#"
                                                    target="_blank">Document : 1692024667184-301314753.pdf</a></p>
                                        </small>
                                        <hr class="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="mt-1 text-muted mt-1">Arjun Zundala
                                            <span style="font-size:14px;">14 Aug, 2023 14:51 PM</span>
                                        </h5>
                                        <small>
                                            <p class="text-justify mb-0">test</p>
                                        </small>
                                        <small>
                                            <p class="text-justify text-info mb-0"><a href="#"
                                                    target="_blank">Document : 1692024667184-301314753.pdf</a></p>
                                        </small>
                                        <hr class="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="mt-1 text-muted mt-1">Arjun Zundala
                                            <span style="font-size:14px;">14 Aug, 2023 14:51 PM</span>
                                        </h5>
                                        <small>
                                            <p class="text-justify mb-0">test</p>
                                        </small>
                                        <small>
                                            <p class="text-justify text-info mb-0"><a href="#"
                                                    target="_blank">Document : 1692024667184-301314753.pdf</a></p>
                                        </small>
                                        <hr class="">
                                    </div>
                                </div>

                                <hr class="">
                                <form action="#" id="create-task-note-form" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <label for="note_attachment" class="mb-1">Attach Document</label>
                                                <input type="file" name="note_attachment" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="note_notes" class="mb-1">Notes{{ required() }}</label>
                                                <textarea name="note_notes" id="note_notes" rows="3" placeholder="Ask a question or post and update..."
                                                    class="form-control" style="resize:none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success mb-0" value="Add Note">
                                            </div>
                                        </div>


                                    </div>
                                </form>
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
        form label {
            font-weight: 700;
            color: #5b5b60;
        }

        .text-muted {
            color: #6c757d;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .scroll::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scroll {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection
@section('script')
    <script>
        $("#assignee_emp_id").select2({
            placeholder: "Select Options",
        });
        $("#project_id").select2({
            placeholder: "Select Options",
        })
        $("#tags_id").select2({
            placeholder: "Select Options",
        })
    </script>
@endsection
