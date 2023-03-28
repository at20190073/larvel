<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function klase(){
        return $this->belongsTo(Klasa::class);
       }

       public function users(){
        return $this->belongsTo(User::class);
       }
   
}
