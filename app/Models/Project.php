<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'start_date',
        'end_date',
        'description',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function($project)
        {
            $project->slug = Str::slug($project->name);
        });
    }

    public function projectCategories()
    {
        return $this->hasMany('project_categories');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_categories');
    }
}

