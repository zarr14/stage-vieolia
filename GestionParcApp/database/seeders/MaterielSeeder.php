<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materiel;

class MaterielSeeder extends Seeder
{
    public function run(): void
    {
        Materiel::insert([
            [
                'type' => 'Laptop',
                'inventaire' => 'INV001',
                'serie' => 'SN123456',
                'description' => 'Dell Latitude 5400',
                'ram' => '8GB',
                'processeur' => 'Intel i5',
                'hdd' => '256GB SSD',
                'noms_employers' => 'John Doe',
                'anciennet' => '2',
            ],
            [
                'type' => 'Projector',
                'inventaire' => 'INV002',
                'serie' => 'SN654321',
                'description' => 'Epson EB-X41',
                'ram' => null,
                'processeur' => null,
                'hdd' => null,
                'noms_employers' => 'Jane Smith',
                'anciennet' => '1',
            ],
        ]);
    }
}
