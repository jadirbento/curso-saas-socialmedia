<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    
    protected $table = 'comments';
    protected $fillable = ['content_scheduling_id', 'parent_id', 'content', 'name', 'email', 'username'];

    
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comments::class);
    }

    public function contentScheduling(): BelongsTo
    {
        return $this->belongsTo(ContentScheduling::class);
    }
}
