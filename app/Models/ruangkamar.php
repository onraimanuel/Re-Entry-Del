<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangkamar extends Model
{
    use HasFactory;
    protected $table = 'ruangkamar';
    protected $primaryKey = 'ruangkamar_id';
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function users(){
        return $this->belongsTo(re_entry::class, 're_entry_id','id');
    }
}
