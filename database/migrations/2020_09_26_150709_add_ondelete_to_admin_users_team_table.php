<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOndeleteToAdminUsersTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_users_team', function (Blueprint $table) {
            $table->dropForeign('admin_users_team_admin_users_id_foreign');
            $table->dropForeign('admin_users_team_team_id_foreign');
            $table->foreign('admin_users_id')->references('id')->on('admin_users')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_users_team', function (Blueprint $table) {
            $table->dropForeign('admin_users_team_admin_users_id_foreign');
            $table->dropForeign('admin_users_team_team_id_foreign');
            $table->foreign('admin_users_id')->references('id')->on('admin_users');
            $table->foreign('team_id')->references('id')->on('team');
        });
    }
}
