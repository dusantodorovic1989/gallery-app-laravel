<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::Class);
        $this->call(GallerySeeder::Class);
        $this->call(CommentsSeeder::Class);
        $this->call(ImagesSeeder::Class);
        
        
    }
}
