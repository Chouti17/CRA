<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;
//use Laravel\Scout\Searchable;

class produit extends Model
{
   // use Searchable;
    use HasFactory;
    protected $guarded=[''];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
   /* public function toSearchableArray():array
    {
        $tableau = [
            'reference' => $this->reference,
            'nom' => $this->nom,

        ];

        return $tableau;
    }

    public function toSearchableArrays():array
    {
        $tableau = [
            'reference' => $this->reference,


        ];

        return $tableau;
    }*/
}
