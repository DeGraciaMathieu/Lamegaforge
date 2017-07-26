<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('publications', function(Blueprint $table) {
        //     $table->foreign('publication_types')
        //         ->references('id')
        //         ->on('publication_types')
        //         ->onDelete('restrict')
        //         ->onUpdate('restrict');
        // });

        Schema::table('videos', function(Blueprint $table) {
            $table->foreign('channel_id')
                ->references('id')
                ->on('channel_id')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('publication_types', function(Blueprint $table) {
        //     $table->dropForeign('publications_publication_types_id_foreign');
        // });
    }
}
