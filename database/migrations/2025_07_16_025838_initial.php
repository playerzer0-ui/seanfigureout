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
        Schema::create("users", function (Blueprint $table) {
            $table->uuid("userID")->primary();
            $table->string("username", 100)->unique();
            $table->string("email", 255)->unique();
            $table->string("password", 255);
        });

        Schema::create("boats", function (Blueprint $table) {
            $table->integer("boatID")->autoIncrement();
            $table->string("boatName", 100)->unique();
        });

        Schema::create("rarities", function (Blueprint $table) {
            $table->integer("rarityID")->autoIncrement();
            $table->string("rarityName", 100);
            $table->integer("rarityValue");
        });

        Schema::create("times", function (Blueprint $table) {
            $table->integer("timeID")->autoIncrement();
            $table->time("time"); // e.g., "09:00:00"
            $table->string("dayType", 20)->nullable(); // "weekday", "weekend", "holiday"
            $table->string("monthRange", 20)->nullable(); // "summer", "winter", "spring", "autumn"
        });

        Schema::create("weathers", function (Blueprint $table) {
            $table->integer("weatherID")->autoIncrement();
            $table->string("weatherName", 100);
        });

        Schema::create("buildings", function (Blueprint $table) {
            $table->integer("buildingID")->autoIncrement();
            $table->string("buildingName", 100);
        });

        Schema::create("regions", function (Blueprint $table) {
            $table->integer("regionID")->autoIncrement();
            $table->string("regionName", 100);
        });

        Schema::create("creatures", function (Blueprint $table) {
            $table->uuid("creatureID")->primary();
            $table->string("creatureName", 100);
            $table->integer("creatureValue");
            $table->integer("rarityID");
            $table->foreign('rarityID')->references('rarityID')->on('rarities')->onDelete('cascade');
        });

        Schema::create("journals", function (Blueprint $table) {
            $table->uuid("userID");
            $table->uuid("creatureID");
            $table->string("journalName", 100);
            $table->primary(['userID', 'creatureID']);
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->foreign('creatureID')->references('creatureID')->on('creatures')->onDelete('cascade');
        });

        Schema::create("storages", function (Blueprint $table) {
            $table->uuid("userID");
            $table->uuid("creatureID");
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->foreign('creatureID')->references('creatureID')->on('creatures')->onDelete('cascade');
        });

        Schema::create("userBoats", function (Blueprint $table) {
            $table->uuid("userID");
            $table->integer("boatID");
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->foreign('boatID')->references('boatID')->on('boats')->onDelete('cascade');
        });

        Schema::create("islands", function (Blueprint $table) {
            $table->integer("islandID")->autoIncrement();
            $table->string("islandName", 100);
            $table->integer("regionID");
            $table->foreign('regionID')->references('regionID')->on('regions')->onDelete('cascade');
        });

        Schema::create("islandBuildings", function (Blueprint $table) {
            $table->integer("islandID");
            $table->integer("buildingID");
            $table->foreign('islandID')->references('islandID')->on('islands')->onDelete('cascade');
            $table->foreign('buildingID')->references('buildingID')->on('buildings')->onDelete('cascade');
        });

        Schema::create("spawnTimes", function (Blueprint $table) {
            $table->uuid("creatureID");
            $table->integer("timeID");
            $table->integer("weatherID");
            $table->foreign('creatureID')->references('creatureID')->on('creatures')->onDelete('cascade');
            $table->foreign('timeID')->references('timeID')->on('times')->onDelete('cascade');
            $table->foreign('weatherID')->references('weatherID')->on('weathers')->onDelete('cascade');
        });

        Schema::create("spawnLocations", function (Blueprint $table) {
            $table->uuid("creatureID");
            $table->integer("regionID");
            $table->foreign('creatureID')->references('creatureID')->on('creatures')->onDelete('cascade');
            $table->foreign('regionID')->references('regionID')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
