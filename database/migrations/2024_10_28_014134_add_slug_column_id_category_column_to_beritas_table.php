<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('slug',255)->after('judul');
            $table->string('id_categories',255)->after('tanggal');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            if(Schema::hasColumn('id_categories','slug')){
                $table->dropColumn('id_categories','slug');
            }
        });
    }
};
