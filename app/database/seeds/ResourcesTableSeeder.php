<?php

class ResourcesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('resources')->truncate();
    $resources = array();
    $file_array = __DIR__."/my_array_data.php";
    if (file_exists($file_array)) {
      require($file_array);
    }
    
    foreach ($resources as $key => $value) {
      $resource = Resource::create(
        array(
          'first_name' => $value[0],
          'last_name' => $value[1],
          'email' => $value[2],
          "profile" => $value[3],
          "contract" => $value[4],
          "active" => true,
          "area" => "DEV"
        )
      );
    }

		// Uncomment the below to run the seeder
		//DB::table('resources')->insert($resources);
	}

}
