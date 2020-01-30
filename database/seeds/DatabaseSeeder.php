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
        Eloquent::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(ProgressTableSeeder::class);
        $this->call(PropertyTypeTableSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(PropertyFeatureTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);

    }
}
