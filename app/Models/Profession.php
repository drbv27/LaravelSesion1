<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'professions';

    protected $fillable = ['title'];

    public function profession(){
        return $this->belongsTo(Profession::class, 'id_profession');
    }

}
