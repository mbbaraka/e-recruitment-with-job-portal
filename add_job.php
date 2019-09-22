<?php
	include_once 'header.php';
?>
<body>
    <!-- Left Panel -->

    <?php
        include_once 'side_bar.php';
    ?>

    <!-- Left Panel -->
    
    <div id="right-panel" class="right-panel">

        <!-- Right Panel-->
        <div class="col-lg-1"></div>
          <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                      <!-- <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div> -->
              
                       <strong>Add New Job</strong>
                                 </div>
                                   <div class="card-body card-block">
                                       <form action="process.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            
                                           <div class="row form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Title</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="job-title-input" class="form-control"></div>
                                          </div>
                                          
                                          <div class="row form-group">
                                              <div class="col col-md-3"><label for="email-input" class=" form-control-label">Salary</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="email-input" name="salary-input" class="form-control"></div>
                                          </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Deadline</label></div>
                                                <div class="col-12 col-md-9"><input type="date" id="password-input" name="password-input" class="form-control"></div>
                                            </div>
                                            <div class="row form-group">
                                              <div class="col col-md-3"><label for="email-input" class=" form-control-label">Job Location</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="email-input" name="location-input" class="form-control"></div>
                                          </div>               
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Job Description</label></div>
                                                <div class="col-12 col-md-9"><textarea name="description-input" id="textarea-input" rows="15" placeholder="Copy and paste Job Description here..." class="form-control"></textarea></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Select Job Type</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="job-type-input" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Contract">Contract</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Internship">Internship</option>
                                           
                                                    </select>
                                                </div>
                                            </div>
                                                                
                                            <div class="row form-group">
                                               <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Job Category</label></div>
                                               <div class="col col-md-9">
                                               <select name="category-input" id="multiple-select" multiple="" class="form-control">
                                                       <option value="Information Technology">Information Technology</option>
                                                       <option value="Business">Business</option>
                                                       <option value="Health and Science">Health and Science</option>
                                                       <option value="Engineering">Engineering</option>
                                                       <option value="Security">Security</option>
                                                       <option value="Casual">Casual</option>
                                                       
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="row form-group">
                                              		<div class="col col-md-3"><label for="email-input" class=" form-control-label">Other Requirements</label></div>
                                              		<div class="col-12 col-md-9"><input type="text" id="email-input" name="others-input" class="form-control"></div>
                                               </div>                
                                               <div class="row form-group">
                                                   <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                   <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                               </div>
                                               <div class="card-footer">
                                                   <button type="submit" class="btn btn-primary btn-sm">
                                                      <i class="fa fa-dot-circle-o"></i> Post Job
                                                   </button>
                                                   <button type="reset" class="btn btn-danger btn-sm">
                                                      <i class="fa fa-ban"></i> Cancel
                                                   </button>
                                               </div>                                                           
                                  </form>
                            </div>
                                                    
                        </div>
                                                
                </div>
        </div>
        <!--Right Panel-->
        <?php
          include_once 'scripts.php';
        ?>
    </body>
</html>