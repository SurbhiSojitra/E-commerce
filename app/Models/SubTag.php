<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTag extends Model
{
    protected $fillable = ['name', 'tag_id'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
