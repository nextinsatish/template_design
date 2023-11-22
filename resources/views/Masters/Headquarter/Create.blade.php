<div class="modal fade" id="createHeadquarter" tabindex="-1" aria-labelledby="AddHeadquarterLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="AddHeadquarterLabel">Add Headquarter</h5>
                <button type="button" class="btn-close btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="Create-Headquarter-Form">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="state_id" class="col-form-label">Select State</label>
                                <select name="state_id" id="state_id" class="form-select">
                                    <option value="" selected>Select</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Rajsthan">Rajsthan</option>
                                    <option value="panjab">panjab</option>
                                    <option value="Hariyana">Hariyana</option>
                                    <option value="Up">Up</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="city_id" class="col-form-label">Select City</label>
                                <select name="city_id" id="city_id" class="form-select">
                                    <option value="" selected>Select</option>
                                    <option value="Rajkot">Rajkot</option>
                                    <option value="ahmedabad">ahmedabad</option>
                                    <option value="junagadh">junagadh</option>
                                    <option value="jamnagar">jamnagar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="headquarter_name">Headquarter Name</label>
                                <input type="text" class="form-control" name="headquarter_name" id="headquarter_name"
                                    placeholder="Enter Headquarter Name">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Submit" name="submit">
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
