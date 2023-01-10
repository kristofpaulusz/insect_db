<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insect extends Model
{
    use HasFactory;
    protected $primaryKey = 'insect_id';

    protected $fillable = [
        'name',
        'nomenclature',
        'extinct',
        'inserted_by'
    ];
}
