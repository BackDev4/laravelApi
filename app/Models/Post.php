<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property int $likes
 * @property int $dislikes
 * @property string $photo
 */
class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
}
