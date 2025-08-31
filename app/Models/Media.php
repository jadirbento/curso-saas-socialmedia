<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    
    protected $table = 'medias';
    protected $fillable = ['name'];

    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(Organization::class);
    }

    public function mdeias():BelongsToMany
    {
        return $this->belongsToMany(Media::class);
    }
}
