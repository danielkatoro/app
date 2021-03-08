<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublishedAtToPubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pub', function (Blueprint $table) {
            $table->dateTime('published_at')->after('published')
                                            ->nullable()
                                            ->default(DB::raw('CURRENT_TIMESTAMP')+2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pub', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
}
