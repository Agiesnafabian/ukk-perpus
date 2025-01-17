<?php

namespace App\Models;

use App\Models\User;
use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
