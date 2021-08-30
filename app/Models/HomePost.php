<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePost extends Model
{
    use HasFactory;

    protected $table = 'home_posts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'photo_path',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
        'deleted_at',
        'created_at',
        'updated_at',
        'top_post'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
