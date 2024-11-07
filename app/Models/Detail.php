<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'detail';
    protected $fillable = ['category_id', 'writer_id', 'materi', 'tanggalPost', 'deskripsi', 'konten'];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function writers(){
        return $this->belongsTo(Writer::class, 'writer_id');
    }
}
