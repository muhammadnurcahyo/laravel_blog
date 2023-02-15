<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = [  //yang boleh di isi
    //     'title',
    //     'excerpt',
    //     'body',
    // ];


    //untuk searching
    public function scopeFilter($query, array $filters)
    {
      
        if(isset($filters['search']) ? $filters['search'] : false){
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('body', 'like', '%'. $filters['search'] . '%');
        }
    }

    protected $guarded = ['id'];  //id yg di jaga atau ga boleh di isi/diganti
   

    public function category (){
        return $this->belongsTo(Category::class);        //untuk menyambungkan relasi tabel kategori dengan post, one to one
    }

    public function author (){
        return $this->belongsTo(User::class, 'user_id');        //untuk menyambungkan relasi tabel kategori dengan post, one to one (1 postingan hanya boleh dibuat oleh 1 user)
    }
}
