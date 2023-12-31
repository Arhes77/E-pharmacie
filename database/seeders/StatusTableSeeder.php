<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuts = [
            [
                'titre_status'=>'pharmacien'
            ],
            [
                'titre_status'=>'gerant'
            ],
            [
                'titre_status'=>'caissier',
            ],
            [
                'titre_status'=>'guardien',
            ],
            [
                'titre_status'=>'stagaire',
            ],
            [
                'titre_status'=>'delegue-medical',
            ],
            [
                'titre_status'=>'livreur',
            ],
            [
                'titre_status'=>'vendeur',
            ],
            [
                'titre_status'=>'client',
            ],
            [
                'titre_status'=>'autre',
            ],
        ];

        foreach ($statuts as $key => $value) {
            Status::create($value);
        }
    }
}
