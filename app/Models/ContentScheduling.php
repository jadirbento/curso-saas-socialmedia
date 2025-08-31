<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ContentScheduling extends Pivot
{
    use HasFactory; 


    public function content(): HasMany
    {
        return $this->hasMany(Comments::class);
    }
}
