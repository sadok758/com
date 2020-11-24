<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom','img','prix','marque','quantite','description',
    ];
    

}
