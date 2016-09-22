<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
	protected $table = 'articles';

    protected $fillable = [
     'user_id','user_email', 'article'
    ];
	 public function User()
    {
        return $this->belongsTo('User');
    }


}
