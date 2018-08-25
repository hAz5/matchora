<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    const ID = 'id';
    const HOST = 'host';
    const GUEST = 'guest';
    const LEAGUE = 'league';
    const DESCRIPTION = 'description';
    const RESULT = 'result';
    const RESULT_OK = 'OK';
    const RESULT_NOK = 'NOK';
    const RESULT_NOT_DONE = null;
    const PREDICTION = 'prediction';
    const STATUS = 'status';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_CLOSED = 'closed';
    const TYPE = 'type';
    const TYPE_PRO = 'pro';
    const TYPE_FREE = 'free';
    const TYPE_VIP = 'vip';

    /**
     * get not done Match
     * @param $q
     *
     * @return mixed
     */
    public function scopeGetNotDone($q)
    {
        return $q->where(self::RESULT, self::RESULT_NOT_DONE);
    }

    /**
     * get ok match
     *
     * @param $q
     *
     * @return mixed
     */
    public function scopeGetOK($q)
    {
        return $q->where(self::RESULT, self::RESULT_OK);
    }

    /**
     * get nok match
     *
     * @param $q
     *
     * @return mixed
     */
    public function scopeGetNok($q)
    {
        return $q->where(self::RESULT, self::RESULT_NOK);
    }

    /**
     * get all done match
     *
     * @param $q
     *
     * @return mixed
     */
    public function scopeGetDone($q)
    {
        return $q->where(self::RESULT, '!=', self::RESULT_NOT_DONE);
    }
}