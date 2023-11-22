<div class="modal fade" id="editState" tabindex="-1" aria-labelledby="editStateLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="editStateLabel"><i class="fas fa-edit text-muted me-1"></i>Edit State</h5>
                <button type="button" class="btn-close btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="Edit-State-Form">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="state_name" class="col-form-label">State Name</label>
                                <input type="text" name="state_name" placeholder="Enter State Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="edit-state-btn" value="Update" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
