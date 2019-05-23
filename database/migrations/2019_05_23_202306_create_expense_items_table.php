<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expense_id')->unsigned();
            $table->string('name');
            $table->double('cost')->nullable();
            $table->double('quantity')->nullable();
            $table->string('currency')->nullable();
            $table->date('date_created');
            $table->boolean('is_done')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            //foreign keys
            $table->foreign('expense_id')->references('id')->on('expenses')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_items');
    }
}
