<?php
namespace App\Domain\Fii\Models;
use Illuminate\Database\Eloquent\Model;

class Fii extends Model
{
    protected $fillable = [
        'fii_code',
        'fii_price',
        'fii_description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}