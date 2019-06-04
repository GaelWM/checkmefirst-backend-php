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
            $table->unsignedInteger('expense_id');
            $table->unsignedInteger('category_id');
            $table->string('name', 100);
            $table->double('quantity')->nullable();
            $table->string('currency', 10);
            $table->double('cost');
            $table->boolean('is_done')->default(1);
            $table->datetime('date_created');
            $table->text('notes')->nullable();
            $table->timestamps();

            //foreign keys
            $table->foreign('expense_id')->references('id')->on('expenses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
