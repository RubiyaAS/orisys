<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirModel extends Model
{
    use HasFactory;
    protected $tables='air_models';
    protected $fillabels=[
                        'firstname',
                        'lastname',
                        'age',
                        'gender',
                        'address',
                        'phone',
                        'email',
                        'password'
                    ];

    protected $primaryKey='id';
}
