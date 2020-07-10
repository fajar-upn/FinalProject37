<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Questions;

class Answers extends Model
{
    protected $table = 'answer';
    protected $fillable = ['answer_content','questions_id'];

    public function question(){
        return $this->belongsTo(Questions::class);
    }
}
