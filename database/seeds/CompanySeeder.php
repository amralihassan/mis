<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'about' => 'about',
            'mission' => 'mission',
            'vision' => 'vision',
            'customers' => '0',
            'projects' => '0',
            'partners' => '0'
        ]);
    }
}
