<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Car;

class Rent extends Model
{
    use HasFactory;
    protected $table = 'rents';
    // protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['start_date', 'end_date', 'destination', 'id_card_number', 'car_id', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
