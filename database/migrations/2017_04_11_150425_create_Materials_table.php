<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id')->comment('原材料的ID');
            $table->string('name',32)->comment('材料名称');
            $table->decimal('price',10,2)->comment('材料价格');
            $table->tinyInteger('type')->comment('材料类型，1=吧台，2=厨房，3=其他');
            $table->tinyInteger('status')->comment('材料的状态，暂时还不知道要来干啥');
            $table->tinyInteger('delete')->comments('材料是否删除，1=是，2=否');
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
        Schema::dropIfExists('materials');
    }
}
