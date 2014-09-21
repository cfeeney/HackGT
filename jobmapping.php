<?php

require("Jobs.php");
$job = new Jobs();
//$actions = array("get_job_data");
$return_value = 'kind of working?';

//if (isset($_GET["action"])) {
//        if (in_array($_GET["action"], $actions)) {
//                switch ($_GET["action"])
//                {
//                        case "get_job_data":
				$return_value = $job->get_data();//$job->get_state_jobs("LA");//$job->get_data();
//				break;
//		}
//	}
//}

//return JSON array
exit(json_encode($return_value));
?>
