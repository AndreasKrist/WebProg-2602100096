<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $table = 'writer';
    protected $fillable = ['namaPenulis'];

    public function detail(){
        return $this->hasMany(Detail::class);
    }
}
