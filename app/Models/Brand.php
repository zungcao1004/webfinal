<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use  App\Models\Category;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'slug',
        'status',
<<<<<<< HEAD
        'category_id',
=======
        'category_id'
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
