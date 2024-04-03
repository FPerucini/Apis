<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id';
     protected $fillable =['Nome','Pais','Telefone'];

    use HasFactory;
}
