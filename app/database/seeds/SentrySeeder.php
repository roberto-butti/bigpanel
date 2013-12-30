<?php
 
use App\Models\User;
 
class SentrySeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('groups')->truncate();
        DB::table('users_groups')->truncate();
 
        Sentry::getUserProvider()->create(array(
            'email'       => 'admin@h-art.com',
            'password'    => "admin",
            'first_name'  => 'Admin',
            'last_name'   => 'Admin',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));
 
        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@h-art.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }
 
}