<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{
    use HasFactory;
    protected $table = "libro";
    protected $fillable = ['ISBN','titulo','autor','autor','idioma','publicacion','editorial'];
    protected $primaryKey = "ISBN";
}
