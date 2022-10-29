<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'documento', 'nombres', 'mail'
    ];

    
    protected $guarded = ['id'];


    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function session()
    {
        return $this->hasMany(Session::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
}
