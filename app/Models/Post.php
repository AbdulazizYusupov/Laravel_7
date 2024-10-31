<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'category_id',
        'body'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
