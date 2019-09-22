<?php
    include_once 'header.php';
?>
<body>  
    <?php
        include_once 'side_bar.php';
    ?>
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">    
    <div class="col-lg-10">            
        <br>
        <div class="card">

            <div class="card-header">
                <strong>Edit Account</strong>
            </div>`
            <div class="card-body card-block">
                <form action="" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" id="input1-group1" name="input1-group1" placeholder="Username" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                                <div class="input-group">
                                    <input type="email" id="input2-group1" name="input2-group1" placeholder="Email" class="form-control">
                                    <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-euro"></i></div>
                                    <input type="text" id="input3-group1" name="input3-group1" placeholder=".." class="form-control">
                                    <div class="input-group-addon">.00</div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        </i> Update
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
