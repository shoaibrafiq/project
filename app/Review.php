<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

protected $fillable = ['body'];


public function by(User $user)
{
$this->user_id = $user->id;
}

public function film()
{
return $this->belongsTo(Film::class);

}

public function user()
{
 return $this->belongsTo(User::class);
}

}
