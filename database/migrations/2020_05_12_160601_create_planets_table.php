<?php

use App\Enums\BiomeType;
use App\Enums\PlanetSize;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('biome_type')->default(BiomeType::UNKNOWN);
            $table->unsignedTinyInteger('size')->default(PlanetSize::UNKNOWN);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
