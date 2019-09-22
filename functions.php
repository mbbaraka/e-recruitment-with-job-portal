<?php
#This file contains functions used in this program
# prepared by Baraka Mark Bright
include_once 'connection.php';

function show_alert(){//function to show alerts
    
     if(isset($_GET['error']) && $_GET['error'] !== ''){

        echo "<div class='alert alert-danger alert-dismissible'>"
        .strval($_GET['error'])."<span class='close' data-dismiss='alert'>&times;
            </span></div>";
        }

    if(isset($_GET['msg']) && $_GET['msg'] !== ''){

         echo "<div class='alert alert-success alert-dismissible'>"
        .$_GET['msg']."<span class='close' data-dismiss='alert'>"
                 . "&times;</span></div>";
    }
}




?>