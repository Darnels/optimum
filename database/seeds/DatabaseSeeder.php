<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            [
                'email' => 'glamolondon@gmail.com',
                'name' => 'Will Koffi',
                'password' => bcrypt('flavie')

            ],[
                'email' => 'jeansidoineake@yahoo.fr',
                'name' => 'Sidoine Aké',
                'password' => bcrypt('leandre')
            ],[
                'email' => 'jk.bosson@betaentreprises.com',
                'name' => 'BOSSON',
                'password' => bcrypt('bosson')
            ],
        ]);
    }
}
