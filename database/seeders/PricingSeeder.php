<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            'category' => 'Basic',
            'cost' => '$30.00',
            'elements' => '[{"element":"One Landing Page"},{"element":"With Responsive"},{"element":"Modern Design"},{"element":"Three Rivision"},{"element":"Four Section"}]',
        ]);
        DB::table('pricings')->insert([
            'category' => 'Standard',
            'cost' => '$60.00',
            'elements' => '[{"element":"One Landing Page"},{"element":"With Responsive"},{"element":"Modern Design"},{"element":"Five Rivision"},{"element":"Six Section"}]',
        ]);
        DB::table('pricings')->insert([
            'category' => 'Premium',
            'cost' => '$90.00',
            'elements' => '[{"element":"One Landing Page"},{"element":"With Responsive"},{"element":"Modern Design"},{"element":"Eight Rivision"},{"element":"Nine Section"}]',
        ]);
    }
}
