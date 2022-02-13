<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name        = "Administrator";
        $administrator->email       = "admin@touche.id";
        $administrator->password    = \Hash::make("touche2020");
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
