<?php

use App\Plan;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = (new Plan())->getTable();
        Schema::create($table, function (Blueprint $table) {
            $table->increments(Plan::ID);
            $table->string(Plan::NAME);
            $table->text(Plan::DESCRIPTION);
            $table->string(Plan::AMOUNT)->default(0);
            $table->integer(Plan::PERIOD);
            $table->boolean(Plan::STATUS)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists((new Plan())->getTable());
    }
}
