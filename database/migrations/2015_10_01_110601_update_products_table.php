<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //New Products Fields
            $table->string('image_name')->after('descriptions')->nullable();
            $table->boolean('is_locked')->default(false);
            $table->integer('quantity')->default(0);
            $table->string('gold_smith')->nullable();
            $table->date('delivered_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        return ;
    }
}
