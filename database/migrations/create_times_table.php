<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimesTable extends Migration
{
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('timeable');
            $table->string('day');
            $table->time('open');
            $table->time('close');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('times');
    }
}
