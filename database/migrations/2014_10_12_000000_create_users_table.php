<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->comment('店员的姓名');
            $table->string('email',32)->comment('email，用于找回密码');
            $table->string('password');
            $table->rememberToken()->comment('用于记住我');
            $table->tinyInteger('type')->comment('用户类型，1=普通店员，2=管理人员');
            $table->tinyInteger('status')->comment('该用户的转态，1=离职，2=在职');
            $table->tinyInteger('level')->comment('会员等级，1=普通用户，2=普通店员，3=采购人员，4=财务人员，5=其他');
            $table->tinyInteger('delete')->comment('软删除，1=为否，2=是');
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
        Schema::drop('users');
    }
}
