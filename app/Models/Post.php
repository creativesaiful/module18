<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Question no- 4
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    //Question no - 6

    public static function getPostsCountByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }




    //Question no- 8
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
