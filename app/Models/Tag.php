<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug', 'sub_category_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function subTags()
    {
        return $this->hasMany(SubTag::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
