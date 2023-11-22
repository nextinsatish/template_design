<div class="modal fade" id="editArea" tabindex="-1" aria-labelledby="AddAreaLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="EditAreaLabel"><i class="fas fa-edit text-muted me-1"></i>Edit Area</h5>
                <button type="button" class="btn-close btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="Edit-Area-Form">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="headquarter_id" class="col-form-label">Headquarter</label>
                                <select name="headquarter_id" id="headquarter_id" class="form-select">
                                    <option value="" selected>Select</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Rajsthan">Rajsthan</option>
                                    <option value="panjab">panjab</option>
                                    <option value="Hariyana">Hariyana</option>
                                    <option value="Up">Up</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="area_name">Area Name</label>
                                <input type="text" class="form-control" name="area_name" id="area_name"
                                    placeholder="Enter Area Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update" name="submit">
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
