<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'amount', 'status', 'token'
    ];

    
    protected $guarded = ['id'];


    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
