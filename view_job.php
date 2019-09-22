<?php
    include_once 'header.php';
?>

<body>
    <!-- Left Panel -->

    <?php
        include_once 'side_bar.php';
    ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">              
       
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">View All Jobs</strong>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-bordered">
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
                                            <td>IT Lecturer</td>
                                            <td>Full Time</td>
                                            <td>Information Technology</td>
                                            <td>23/08/2019</td>
                                            <td>23/09/2019</td>
                                            <td><a href="#"><i class="fa fa-pencil"></i></a>&nbsp&nbsp
                                            <a href="#"><i class="fa fa-eye"></i></a>&nbsp&nbsp
                                            <a href="#"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>IS Lecturer</td>
                                            <td>Full Time</td>
                                            <td>Information Technology</td>
                                            <td>23/08/2019</td>
                                            <td>23/09/2019</td>
                                            <td><a class="link-footer" href="edit_job.php"><i class="fa fa-pencil"></i></a>&nbsp&nbsp
                                            <a href="#"><i class="fa fa-eye"></i></a>&nbsp&nbsp
                                            <a href="#"><i class="fa fa-trash-o"></i></a></td>
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
