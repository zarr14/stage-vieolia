<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;

class EmployerSeeder extends Seeder
{
    public function run(): void
    {
        Employer::insert([
            [
                'noms' => 'John Doe',
                'poste_sensible' => 'Manager',
                'site' => 'Site A',
                'date_dacquisition' => '2020-01-15',
                'anne_dacquisition' => '2020',
                'anciennet' => '4',
                'serie_materiel' => 'SN123456',
            ],
            [
                'noms' => 'Jane Smith',
                'poste_sensible' => 'Technician',
                'site' => 'Site B',
                'date_dacquisition' => '2021-06-10',
                'anne_dacquisition' => '2021',
                'anciennet' => '3',
                'serie_materiel' => 'SN654321',
            ],
        ]);
    }
}