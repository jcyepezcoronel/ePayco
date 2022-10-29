<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $table = 'wallets';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'amount'
    ];

    
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Payment::class);
    }
}
