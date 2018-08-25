<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPlan extends Pivot
{
    const USER_ID = 'user_id';
    const PLAN_ID = 'plan_id';
    const RESERVE = 'reserve';

    protected $table = 'user_plan';
    protected $guarded = [];

    /**
     * relation with User Model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, self::USER_ID, User::ID);
    }

    /**
     * relation with Plan Model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class, self::PLAN_ID, Plan::ID);
    }
}
