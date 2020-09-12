<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjects_id');
            $table->string('homework');
            $table->date('delivery_date');
            $table->string('delivery_hour')->nullable();
            $table->boolean('isGroup')->default(true);
            $table->string('team')->nullable();
            $table->string('observation')->nullable();
            $table->enum('status',array('PENDING','COMPLETED','INCOMPLETE','DOING'));
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('subjects_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homeworks');
    }
}
