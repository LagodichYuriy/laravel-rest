<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['user_id_employee', 'user_id_reviewer', 'rating', 'comment'];


}
