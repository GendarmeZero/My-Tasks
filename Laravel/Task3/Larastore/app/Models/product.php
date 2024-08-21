<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function Users(){
        return $this->hasOne(User::class);
    }
    protected $fillable = [
        'product_name','product_description','product_price'
    ];
}
