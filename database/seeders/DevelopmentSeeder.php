<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Call all the seeders you want here
        $this->call([
            CustomerTypeSeeder::class,
            CurrencySeeder::class,
            EntitySeeder::class,
            WarehouseSeeder::class,
            BatchNumberSeeder::class,
            ProductSeeder::class,
            InventorySeeder::class,  
        ]);
    }
}
