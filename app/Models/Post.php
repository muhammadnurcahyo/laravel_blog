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
}
