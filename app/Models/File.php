<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    
    protected $table = 'files';
    protected $fillable = ['content_id', 'name', 'type', 'url'];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
