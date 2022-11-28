<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbkomponens extends Model
{
    use HasFactory;
    protected $guarded =['ID','create_at','update_at'];
    public $tabel ="tbkomponens";
}
