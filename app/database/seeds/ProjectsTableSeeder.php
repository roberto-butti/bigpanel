<?php

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
    // Uncomment the below to wipe the table clean before populating
    DB::table('projects')->truncate();
    $projects = array();
    $file_array = __DIR__."/my_array_data.php";
    if (file_exists($file_array)) {
      require($file_array);
    }

    foreach ($projects as $key => $value) {
      $project = Project::create(
        array(
          'name' => $value[0],
          'customer' => $value[1],
          'description' => $value[2],
          "projectmanager" => $value[3]
        )
      );
    }

		// Uncomment the below to run the seeder
		// DB::table('projects')->insert($projects);
	}

}
