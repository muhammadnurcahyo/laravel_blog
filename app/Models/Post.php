<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = [  //yang boleh di isi
    //     'title',
    //     'excerpt',
    //     'body',
    // ];

    protected $guarded = ['id'];  //id yg di jaga atau ga boleh di isi/diganti
    protected $with = ['category', 'author'];

    public function category (){
        return $this->belongsTo(Category::class);        //untuk menyambungkan relasi tabel kategori dengan post, one to one
    }

    public function author (){
        return $this->belongsTo(User::class, 'user_id');        //untuk menyambungkan relasi tabel kategori dengan post, one to one (1 postingan hanya boleh dibuat oleh 1 user)
    }
}
