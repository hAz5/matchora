<?php

use App\League;
use App\Match;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = (new Match())->getTable();
        Schema::create($table, function (Blueprint $table) {
            $table->increments(Match::ID);
            $table->string(Match::HOST);
            $table->string(Match::GUEST);
            $table->string(Match::RESULT)->nullable();
            $table->text(Match::DESCRIPTION);
            $table->string(Match::LEAGUE);
            $table->string(Match::PREDICTION);
            $table->enum(Match::STATUS, [
                Match::STATUS_CLOSED,
                Match::STATUS_FAILED,
                Match::STATUS_SUCCESS
            ]);
            $table->enum(Match::TYPE, [
                Match::TYPE_PRO,
                Match::TYPE_FREE,
                Match::TYPE_VIP
            ]);
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
        Schema::dropIfExists((new Match())->getTable());
    }
}
