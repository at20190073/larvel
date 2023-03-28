<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Klasa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        Klasa::create([
           'vrsta'=>'prvaKlasa',
           'cena'=>'2000'
        ]);
        Klasa::create([
           'vrsta'=>'drugaKlasa',
           'cena'=>'1000'
        ]);
        Klasa::create([
           'vrsta'=>'trecaKlasa',
           'cena'=>'500'
        ]);
    }
}
