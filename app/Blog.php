<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
        //
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    /**
     * Fillable fields for a Profile.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content_of_post',
    ];

    protected $dateFormat = 'U';
}
