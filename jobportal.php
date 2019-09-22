<?php
include_once 'header.php';
?>

<body class="btn-group-justified">
   <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <!-- <a class="navbar-brand" href="#">Job Portal logo </a> -->
    <ul class="job-menu navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Favorites</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  
<br>
    <div>
        <div class="container">            
            <div class="card">
              <div class="content mt-3">
                <div class="animated fadeIn">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title">Latest Jobs</strong>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                            <th>Date Posted</th>
                                            <th>Deadline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >IT Lecturer</td>
                                            <td class="job-type">Full Time</td>
                                            <td class="job-category">Information Technology</td>
                                            <td class="date-posted">23/08/2019</td>
                                            <td class="deadline">23/09/2019</td>
                                            <td class="text-center">
                                                <a href="job.php"><button class="btn btn-info">View</button></a>
                                            </td>                                            
                                        </tr>                                      
                                                                
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                    
        </div>
    </div> 
    <?php 
    //this is a footer
    include_once 'footer.php';
    //these are scripts 
    include_once 'scripts.php'; 
    ?>
</body>

</html>
