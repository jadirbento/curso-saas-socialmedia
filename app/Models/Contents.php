<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;
    
    protected $table = 'contents';
    protected $fillable = ['organization_id', 'title', 'description', 'tags', 'type'];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function scheduling(): BelongsToMany
    {
        return $this->belongsToMany(MediaOrganization::class)
        ->withPivot('schedule_at');
    }
}
