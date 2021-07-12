<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Offre;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Offre extends Model implements Searchable
{
    //use HasFactory;

    protected $fillable=['titre','detail','date_expire','category_id','type'];

    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function getSearchResult(): SearchResult{
        $url = route('offre.index',$this->id);
        return new SearchResult(
            $this,
            $this->type, 
            $url
        );
    }
   
}
