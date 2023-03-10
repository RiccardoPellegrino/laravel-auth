<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Type extends Model
{
    use HasFactory;

    protected $fillable = ['workflow','slug'];
    public static function generateSlug($workflow)
    {
        return Str::slug($workflow, '-');
    }
    public function projects():HasMany{
        return $this->hasMany(Project::class);
    }
}
