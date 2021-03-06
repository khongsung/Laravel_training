<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('posts'))
        {
            Schema::table('posts', function(Blueprint $table) {
                $table->integer('status_id')->default(1);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('posts', 'status_id'))
        {
            Schema::table('posts', function(Blueprint $table) {
                $table->dropColumn('status_id');
            });
        }
        
    }
}
