<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string("company")->nullable();
            $table->string("address");
            $table->integer("num_of_cover_page")->nullable();
            $table->integer("num_of_text_page")->nullable();
            $table->string("cover_type");
            $table->string("trim_size")->nullable();
            $table->integer("qtty")->nullable();
            $table->string("colour_option_cover");
            $table->string("colour_option_inner");
            $table->string("colour_option_insert");
            $table->string('colour_option_text');
            $table->string("paper_stock_cover");
            $table->string("paper_stock_inner");
            $table->string("paper_stock_insert");
            $table->string("paper_stock_text");
            $table->string("cover_finishing");
            $table->string("complete_job_finishing");
            $table->string("packaging");
            $table->string("other_packaging");
            $table->string("special_instruction")->nullable();
            $table->string("delivery_instruction")->nullable();
            $table->string("finishing_info_text")->nullable();
            $table->string("date");
            $table->string("awareness");
            $table->integer('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('quotes');
    }
}
