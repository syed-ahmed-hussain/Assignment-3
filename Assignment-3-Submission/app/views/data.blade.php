 <?php
 	echo '<pre>';
    $users = DB::table('users')->get();
    $projects = DB::table('projects')->get();
    
	foreach ($users as $user)
	{ 
    	echo "<h1>".$user->username."</h1>";
    	foreach ($projects as $project)
		{ 
			if($project->user_id == $user->id){
				
				$code = $project->code;
    			$code = str_replace('<?php','<<', $code);
    			$code = str_replace('?>','>>', $code);
    			echo "<h2>".$code."</h2>";
    			$code = str_replace('<<','', $code);
    			$code = str_replace('>>','', $code);
    			echo "<h2>Result:</h2>";
    			eval($code);

			}
		}
	}
    echo '</pre>';