<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToAdminUsersTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_users_team', function (Blueprint $table) {
            $table->unsignedInteger('admin_users_id');
            $table->foreign('admin_users_id')->references('id')->on('admin_users');
            $table->foreignId('team_id')->references('id')->on('team');
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
            $table->dropColumn('admin_users_id');
            $table->dropForeign('admin_users_team_team_id_foreign');
            $table->dropColumn('team_id');
        });
    }
}
