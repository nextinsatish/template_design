<div class="modal fade" id="createCity" tabindex="-1" aria-labelledby="AddCityLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="AddCityLabel">Add City</h5>
                <button type="button" class="btn-close btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="Create-City-Form">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="state_id" class="col-form-label">Select State</label>
                                <select name="state_id" id="state_id" class="form-select">
                                    <option value="" selected>Select</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Rajsthan">Rajsthan</option>
                                    <option value="Hariyana">Hariyana</option>
                                    <option value="Panjab">Panjab</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="city_name">City Name</label>
                                <input type="text" name="city_name" id="city_name" placeholder="Enter City Name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="create-city-btn" value="Submit" class="btn btn-success btn-sm">
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
