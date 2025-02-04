<div class="form-group">
                                <label class="control-label col-md-3">Employment Type:</label>
                                <div class="col-md-7 hidden" id="employment-type-holder">
                                    <div class="row">
                                        <!-- select employee type -->
                                        <div class="col-md-12" data-toggle="buttons" id="employment-type-area">
                                            <div class="row">
                                                <div class=" col-md-9">
                                                    <select id="employment-type" class="form-control">
                                                        <option value="regular (open-ended)">Regular (open-ended)</option>
                                                        <option value="regular (fixed-term)" selected="">Regular (fixed-term)</option>
                                                        <option value="intern">Intern</option><option value="probationary">Probationary</option>
                                                        <option value="casual">Casual</option><option value="consultant">Consultant</option>                                                    
                                                    </select>
                                                </div>
                                                <button type="button" id="update-employee-type" class="btn btn-info hidden">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="employment-type-viewer" class="col-md-7">
                                    <div class="row">
                                        <!-- select employee type -->
                                        <div class="col-md-9" id="employment-type-text">
                                            Regular (fixed-term)</div>
                                        <input type="hidden" id="employment-type-hidden" value="">
                                    </div>
                                </div>
                                <div class="col-md-2">[<a href="#edit-type" id="edit-employee-type">Edit Type</a>]</div>
                                

                            </div>


                            <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body text-center">
                                <div class="mb-2">Toastr Left Bottom</div>
                                <button class="btn btn-primary" id="toastr-7">Launch</button>
                                <a href="add_employee.inc.php">add employee</a>
                                </div>
                            </div>
                        </div>



                        <?php 

//connection

include '../../includes/config.inc.php';

// fetch active employees

$activeEmployees = 
$conn->query(
    "SELECT * FROM employees WHERE status = 1"
)->fetchAll(PDO::FETCH_ASSOC);

// fetch terminated employees

$terminatedEmployees = 
$conn->query(
    "SELECT * FROM employees WHERE status = 0"
)->fetchAll(PDO::FETCH_ASSOC);

// fetch all employees

$allEmployees = 
$conn->query(
    "SELECT * FROM employees"
)->fetchAll(PDO::FETCH_ASSOC);

?>