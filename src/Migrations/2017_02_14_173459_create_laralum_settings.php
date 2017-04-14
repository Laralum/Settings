<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laralum\Settings\Models\Settings;

class CreateLaralumSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laralum_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appname');
            $table->string('description');
            $table->string('keywords');
            $table->string('author');
            $table->timestamps();
        });

        Settings::create([
            'appname'     => 'Laralum',
            'description' => 'The modular laravel administration panel',
            'keywords'    => 'Laralum,Admin,Panel,CMS,Laravel,Modern,Developers',
            'author'      => 'Erik Campobadal, Aitor Riba',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laralum_settings');
    }
}
