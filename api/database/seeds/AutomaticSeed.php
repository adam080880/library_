<?php

use Illuminate\Database\Seeder;

use App\Config;
use App\Role;
use App\User;

class AutomaticSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config;
        $config->title = "library_name";
        $config->save();

        $config = new Config;
        $config->title = "address";
        $config->save();

        $role = new Role;
        $role->name = "admin";
        $role->save();
            // New Admin
            $user = new User;
            $user->name = "Admin";
            $user->email = "admin@admin.com";
            $user->password = bcrypt('12345678');
            $user->verified = 1;
            $user->role_id = $role->id;
            $user->save();

        $role = new Role;
        $role->name = "client";
        $role->save();
    }
}
