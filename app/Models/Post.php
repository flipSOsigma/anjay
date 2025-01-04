<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function userPost () {
        $this->hasOne(User::class, 'id', 'userId');
    }
}
