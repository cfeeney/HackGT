<?php

require("Jobs.php");
$job = new Jobs();
$actions = array("get_job_data","get_state_jobs");
$return_value = 'kind of working?';

if (isset($_GET["action"])) {
        if (in_array($_GET["action"], $actions)) {
                switch ($_GET["action"])
                {
                        case "get_job_data":
				$return_value = $job->get_data();
				break;
			case "get_state_jobs":
				$return_value = $job->get_state_jobs($_GET["state"]);
				break;
		}
	}
}

//return JSON array
exit(json_encode($return_value));
?>
