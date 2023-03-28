<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Klasa::truncate();
        \App\Models\User::truncate();
        \App\Models\Ticket::truncate();
    
        \App\Models\Ticket::factory(5)->create();
    
           /* $user = \App\Models\User::factory()->create();
    
            $kla1 =  \App\Models\Klasa::create([
                'vrsta'=>"PrvaKlasa",
                'cena'=>'2000'
            ]);
            $kla2 =  \App\Models\Klasa::create([
                'vrsta'=>"DrugaKlasa",
                'cena'=>'1000'
            ]);
            $kla3 =  \App\Models\Klasa::create([
                'vrsta'=>"TrecaKlasa",
                'cena'=>'500'
            ]);
    
            $ticket1 =  \App\Models\Ticket::create([
                'aviokompanija'=>'Ptica',
                'zemlja_polaska'=>'Srbija',
                'destinacija'=>'Bali',
                'user_id'=>$user->id,
                'ticketClass_id'=>$kla2->id
            ]);
    
            $ticket2 =  \App\Models\Ticket::create([
                'aviokompanija'=>'Orao',
                'zemlja_polaska'=>'Hrvatska',
                'destinacija'=>'Bugarska',
                'user_id'=>$user->id,
                'ticketClass_id'=>$kla1->id
            ]);
    
            $ticket3 =  \App\Models\Ticket::create([
                'aviokompanija'=>'Zmaj',
                'zemlja_polaska'=>'Kina',
                'destinacija'=>'Spanija',
                'user_id'=>$user->id,
                'ticketClass_id'=>$kla3->id
            ]);
        
    */
    }
}
