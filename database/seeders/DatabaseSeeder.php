<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ticket;
use Database\Factories\CategoryFactory;
use Database\Factories\TicketFactory;
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
        // \App\Models\User::factory(10)->create();
       
        Category::factory()->count(5)->create();

    }
}
