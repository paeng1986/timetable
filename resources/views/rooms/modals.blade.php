<!-- Modal for adding a new room -->
<div class="modal custom-modal" id="resource-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">x</span>
                </button>

                <h4 class="modal-heading">Add New Lecture Room</h4>
            </div>

            <form class="form" method="POST" action="" id="resource-form">
                <input type="hidden" name="_method" value="">
                <div class="modal-body">
                    <div id="errors-container">
                        @include('partials.modal_errors')
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="specialization">Specialization</label>
                                <select name="specialization" id="specialization" class="form-control">
                                    <option value=""></option>
                                    <optgroup label="High School Level">
                                        <option value="Business and Management">Business and Management</option>
                                        <option value="Electrical/Electronics">Electrical/Electronics</option>
                                        <option value="English">English</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="Hospitality/Culinary Mgt">Hospitality/Culinary Mgt</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Physical Education">Physical Education</option>
                                        <option value="Sciences">Sciences</option>
                                        <option value="Social and Behavioral Sciences">Social and Behavioral Sciences</option>
                                        <option value="Tourism Management">Tourism Management</option>
                                    </optgroup>
                                    <optgroup label="Tertiary Level">
                                        <option value="Accounting">Accounting</option>
                                        <option value="Biological Sciences">Biological Sciences</option>
                                        <option value="Business and Management">Business and Management</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Communications">Communications</option>
                                        <option value="Computer Graphics">Computer Graphics</option>
                                        <option value="Criminology">Criminology</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="English/Foreign Language">English/Foreign Language</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="Hospitality/Culinary Mgt">Hospitality/Culinary Mgt</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Law">Law</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Multimedia Arts">Multimedia Arts</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Physical Education">Physical Education</option>
                                        <option value="Physical Sciences">Physical Sciences</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Social and Behavioral Science">Social and Behavioral Science</option>
                                        <option value="Tourism Management">Tourism Management</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type" id="room_type"> 
                                    <option value="Lec">Lec</option>
                                    <option value="Lab">Lab</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Capacity</label>
                                <input type="number" name="capacity" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-offset-1 col-md-offset-1">
                                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancel</button>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <button type="submit" class="submit-btn btn btn-primary btn-block">Add Resource</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>