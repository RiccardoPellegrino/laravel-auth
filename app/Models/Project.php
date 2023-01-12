<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name_project', 'slug', 'description','dev_lang','framework','team','link_git','lvl_diff','cover_image','workflow_id'];

    public static function generateSlug($name_project)
    {
        return Str::slug($name_project, '-');
    }
    public function types():BelongsTo{
        return $this->belongsTo(Type::class);
    }
}
