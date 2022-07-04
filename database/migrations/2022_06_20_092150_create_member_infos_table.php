<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_infos', function (Blueprint $table) {
            $table->id();
          
            $table->char('district_name');
            $table->char('market_name');
            $table->string('shop_name');
            $table->string('customer_name');
            $table->string('product_sku_400ml');
            $table->string('product_sku_500ml');
            $table->string('phone');
            $table->string('total_consume_amount');
         
          
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('member_infos');
    }
}
