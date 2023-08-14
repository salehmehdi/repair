<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Result;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];

    public function search()
    {
        return $this->hasMany(Result::class);
    }
}
