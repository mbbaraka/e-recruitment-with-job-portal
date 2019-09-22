<?php
//This file contains all the executions taking place in the application

#Registering new administrators
require_once 'connection.php';
require_once 'functions.php';

//Adding new job 
if(isset($_POST['add_job'])) {
	$errors = array();
	if(!isset($_POST['job-title-input']) || $_POST['job-title-input'] == ''){

            $errors[] = urlencode('Job Title is needed');

    }else{
        
        $job_title = strip_tags(trim(htmlspecialchars($_POST['job-title-input'])));        
    }
    if (!$errors) {
    	# code...
    	$stmt = $db_con->prepare("INSERT INTO jobs_table(job_title) 
            VALUES(?)");
        
        $stmt->bind_param('s',$job_title);
        
        $stmt->execute();
            
        $result = $stmt->get_result();
            
        $row = $db_con->affected_rows;
        
        
        if($row == 1){
        	
        	$msg = urlencode("Congratulations $fullnames! You're successfully "
                    . "registered");
                
            header('Location:add_job.php?msg='.$msg);
        }
        else
        {
        	echo "Not Success";
        }

    }
	
}
?>
