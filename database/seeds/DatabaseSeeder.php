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
         $this->call(UsersTableSeeder::class);
         $this->call(ClientTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(TicketTableSeeder::class);
         $this->call(ButtonTableSeeder::class);
         $this->call(ConsoleTableSeeder::class);
         $this->call(MollieProfileTableSeeder::class);
         $this->call(UserRoleTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(ServiceTableSeeder::class);
         $this->call(SubscriptionTypeTableSeeder::class);
         $this->call(SubscriptionTableSeeder::class);
//         $this->call(MessageTableSeeder::class);
    }
}
