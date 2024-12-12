<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        setting::create([
            'key'=>'_site_name',
            'label'=>'judul situs',
            'value'=>'lppmp uns',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat kantor',
            'value'=>'Jl Ir Sutami Surakarta',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://Youtube.com/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_discription',
            'label'=>'Site Discription',
            'value'=>'lembaga penjaminan mutu pendidikan UNS',
            'type'=>'text',
        ]);
    }
           
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
