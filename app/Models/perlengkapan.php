<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perlengkapan extends Model
{
    use HasFactory;
    protected $table = 'perlengkapan';
    protected $primaryKey = 'perlengkapan_id';
}
