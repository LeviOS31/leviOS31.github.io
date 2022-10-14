<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircraft', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Fighter', 'Bomber', 'strike_aircraft', 'twin-engine_fighter', 'Helicopter', 'Jet_fighter']);
            $table->string('manufacturer');
            $table->enum('country', ['USA', 'UK', 'Japan', 'Germany', 'USSR', 'China', 'Sweden', 'France', 'Italy']);
            $table->string('rank');
            $table->json('image');
            $table->json('BR');
            $table->json('armaments');
            $table->json('crew');
            $table->text('Description');
            $table->json('general info');
            $table->longtext('Usage');
            $table->longtext('History');
            $table->json('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aircraft');
    }
};
