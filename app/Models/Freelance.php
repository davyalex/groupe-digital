<?php

namespace App\Models;

use App\Models\User;
use App\Models\Freelance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freelance extends Model
{
    use HasFactory;

    protected $fillable=['nom','specialite','experience','contact','detail','email','user_id'];

    /**
     * Get the user that owns the Freelance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
