<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $primaryKey = 'type';
    protected $table = 'materiel';
    protected $fillable = ['type', 'inventaire', 'serie', 'description', 'ram', 'processeur', 'hdd', 'noms_employers'];
    use HasFactory;
}

