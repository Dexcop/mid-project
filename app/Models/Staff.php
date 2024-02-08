<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'nomor',
        'image',
        'CategoryId'
    ];

    public function Staff(){
        return $this->belongsTo(Category::class);
    }

}