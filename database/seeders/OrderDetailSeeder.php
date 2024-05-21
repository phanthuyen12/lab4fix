<?php

// database/seeders/OrderDetailSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        OrderDetail::factory()->count(100)->create();
    }
}

