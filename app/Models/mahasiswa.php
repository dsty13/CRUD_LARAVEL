<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table ='mahasiswa';
    protected $guarded = 'id';
    protected $fillable =[
        'id','nrp','nama','email','alamat'
    ];
   
    
}
