<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Plan
 *
 * @mixin \Eloquent
 */
class Plan extends Model
{
    const ID = 'id';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const PERIOD = 'period';
    const AMOUNT = 'amount';
    const STATUS = 'status';
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $guarded = [];

    /**
     * get all active plans
     *
     * @param $q
     *
     * @return mixed
     */
    public function scopeActive($q)
    {
        return $q->where(self::STATUS, self::STATUS_ACTIVE);
    }

    /**
     * get all inactive plans
     *
     * @param $q
     *
     * @return mixed
     */
    public function scopeInactive($q)
    {
        return $q->where(self::STATUS, self::STATUS_INACTIVE);
    }
}
