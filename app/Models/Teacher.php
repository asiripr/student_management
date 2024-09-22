<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table='teachers';
    protected $primarykey='id';
    protected $fillable=['name', 'address', 'mobile'];
    use HasFactory;
}
