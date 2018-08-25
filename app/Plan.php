<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    const ID = 'id';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const PERIOD = 'period';
    const AMOUNT = 'amount';
    const STATUS = 'status';

    protected $guarded = [];
}
