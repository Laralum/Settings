<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
            $table->timestamps();
        });

        Settings::create([
            'appname' => 'Laralum',
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
