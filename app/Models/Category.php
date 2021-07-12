<?php

namespace App\Models;

use App\Models\Offre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
    //use HasFactory;
    protected $fillable=['libelle'];

    public function offres(){
        return $this->hasMany(Offre::class);
    }

    public function getSearchResult(): SearchResult{
        $url = route('offre.index',$this->id);
        return new SearchResult(
            $this,
            $this->libelle, 
            $url
        );
    }

}
