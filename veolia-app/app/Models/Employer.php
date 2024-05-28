<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $primaryKey = 'noms';
    protected $table = 'employer';
    protected $fillable = ['noms', 'poste_sensible', 'site', 'date_dacquisition', 'anne_dacquisition', 'anciennet', 'serie_materiel'];
    use HasFactory;
    
}
