<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableName extends Model
{
    use HasFactory;

    protected $table = 'table_name';

    protected $guarded = ['id'];


    public function user(){
        
        return $this->belongsTo(User::class);
    }
}
