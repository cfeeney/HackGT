<?php
class Jobs
{
	public function get_data() {
	      	$con=mysqli_connect('localhost','root','password','jobmapping');
	      	if (!mysqli_connect_errno()) {
			$query = "select states.abbreviation state, count(*) jobs from jobs left join states on (states.id = jobs.state_id) left join industries on (industries.id = jobs.industry_id) where industry_id = 1 group by states.abbreviation";
			$result = mysqli_query($con,$query);
			$rows = array();
			while($row = mysqli_fetch_assoc($result))
                        {
                        	array_push($rows,$row);
                        }
              		mysql_close($con);
              		return $rows;
      		}
        	return 'failed';
	}

	public function get_state_jobs($state) {
		$con=mysqli_connect('localhost','root','password','jobmapping');
                if (!mysqli_connect_errno()) {
                        $query = "select jobs.name, jobs.link from jobs left join states on (states.id = jobs.state_id) left join industries on (industries.id = jobs.industry_id) where industry_id = 1 and states.abbreviation = '" . $state . "'";
                        $result = mysqli_query($con,$query);
                        $rows = array();
                        while($row = mysqli_fetch_assoc($result))
                        {
                                array_push($rows,$row);
                        }
                        mysql_close($con);
                        return $rows;
		}
                return 'failed';
	}
}
?>
