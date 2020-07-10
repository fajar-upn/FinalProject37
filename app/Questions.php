<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answers;

class Questions extends Model
{
    protected $table = 'question';
    protected $fillable = ['title','description'];

    public function answer(){
        return $this->hasMany(Answers::class);
    }
}
