<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'title',
        'description',
        'rate',
        'img',
    ];




    ############################## Relations ################################
    public function category(){
        return  $this -> belongsTo("App\Models\Category") ;
    }

}
